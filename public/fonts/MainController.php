<?php

namespace App\Http\Controllers;

use App\Layout;
use App\Page;
use App\Template;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function index(Page $page, Template $template)
    {

        $page = $page->all();
        $templates = $template->all();
        $layouts = Layout::all();
        return view('admin',['pages' => $page, 'templates' => $templates,'layouts' => $layouts]);
    }

    public function form(Template $template){
        $templates = $template->all();
        $basicTemplate = $templates->where('name','basic')->first();
        $layouts = $basicTemplate->layoutsByThisTemplate;
        return view('form',['templates' => $templates, 'layouts' => $layouts,'basicTemplate' => $basicTemplate]);
    }


    public function page($slug, Page $page){

            $info = $page->findBySlug($slug);
            $layout = $info->pageHasLayout->name;

            if($info){
                return view('templates.'.$layout,['info' => $info]);
            }

            abort('404');

    }

    public function update_page($slug, Page $page,Template $template){

        $info = $page->findBySlug($slug);
        $layouts = $info->templates->layoutsByThisTemplate;
        $templates = $template->all();

        if($info){
            return view('edit',['info' => $info, 'layouts' => $layouts, 'templates' => $templates]);
        }

        abort('404');
    }


    public function change_form(Request $request,Template $template){

        $templates = $template->all();
        $changedTemplate = $templates->where('id',$request->template_id)->first();

        $layouts = $changedTemplate->layoutsByThisTemplate;
            return view('form-template',['layouts' => $layouts, 'templates' => $templates, 'changedTemplate' => $changedTemplate]);
    }

    public function change_template($slug, Page $page,Request $request, Template $template){

        $info = $page->findBySlug($slug);
        $templates = $template->all();
        $changedTemplate = $templates->where('id',$request->template_id)->first();
        $layouts = $changedTemplate->layoutsByThisTemplate;

        if($info){
            return view('edit-template',['info' => $info, 'layouts' => $layouts, 'templates' => $templates, 'changedTemplate' => $changedTemplate]);
        }

        abort('404');
    }

    public function update_template(Request $request, $slug,Page $page){
        $page->findBySlug($slug)->update($request->all());
        return back();
    }

    public function set_form(Request $request, Page $page){

        $requestData = $request->all();
        $slug = $request->slug;
        $page = $page->findBySlug($slug);

        if($page){
            return view('error.error-slug');
        }
        else{



dd($request->file('image')->getClientOriginalExtension().' '.uniqid().'.'.$imageExtension);

            $createdPage = Page::create($requestData);


            if ($request->hasFile('image')) {
                $imageExtension = $request->file('image')->getClientOriginalExtension();
                $imageFilename = uniqid().'.'.$imageExtension;
                $createdPage->image = $imageFilename;
                $createdPage->save();
                $request->file('image')->move('images', $imageFilename);

            }

            if ($request->hasFile('body_image')) {
                $imageBodyExtension = $request->file('body_image')->getClientOriginalExtension();
                $imageBodyfilename = uniqid().'.'.$imageBodyExtension;
                $createdPage->body_image = $imageBodyfilename;
                $createdPage->save();
                $request->file('body_image')->move('images', $imageBodyfilename);
            }

            return redirect()->route('wow-page',['slug' => $slug]);
        }


    }

    public function store_page(Request $request, Page $page, $slug){

            $requestData = $request->all();
            $updatedPage = $page->findBySlug($slug);
            $updatedPage->update($requestData);

            if ($request->hasFile('image')) {
                $imageExtension = $request->file('image')->getClientOriginalExtension(); 
                $imageFilename = uniqid().'.'.$imageExtension;
                $updatedPage->image = $imageFilename;
                $updatedPage->save();
                $request->file('image')->move('images', $imageFilename);

            }

            if ($request->hasFile('body_image')) {
                $imageBodyExtension = $request->file('body_image')->getClientOriginalExtension(); 
                $imageBodyfilename = uniqid().'.'.$imageBodyExtension;
                $updatedPage->body_image = $imageBodyfilename;
                $updatedPage->save();
                $request->file('body_image')->move('images', $imageBodyfilename);

            }

            return redirect()->route('wow-page',['slug' => $request->slug]);

    }


    public function users(User $user){
        $userId = auth()->user()->id;
        $users = $user->where('id','!=',$userId)->get();
        return view('user',['users' => $users]);
    }

    public function add_user($id, User $user){
        $user->find($id)->update(['role' => 'admin']);
        return back();
    }

    public function delete_page($slug, Page $page){
        $page->findBySlug($slug)->delete();
        return back();
    }

    public function delete_user($id, User $user){
        $user->find($id)->update(['role' => null]);
        return back();
    }

    public function video(Request $request, $slug, Page $page){
        $page->findBySlug($slug)->update($request->all());
        return back();
    }

    public function changeStatusVideo(Page $page, $slug){
        $page = $page->findBySlug($slug);
        $statusVideo = $page->video_status;

        switch ($statusVideo){
            case 0: $page->video_status = 1;

            break;

            case 1: $page->video_status = 0;
                break;
        }

        $page->save();
        return back();
    }

    public function reset(){
        return view('auth.passwords.reset',['token' => csrf_token()]);
    }

}
