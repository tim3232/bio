<?php

namespace App\Http\Controllers;

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
        return view('admin',['pages' => $page, 'templates' => $templates]);
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
                return view('templates.type-templates.'.$layout,['info' => $info]);
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
            return view('form-create',['layouts' => $layouts, 'templates' => $templates, 'changedTemplate' => $changedTemplate]);
    }

    public function change_template($slug, Page $page,Request $request, Template $template){

        $info = $page->findBySlug($slug);

        $templates = $template->all();
        $changedTemplate = $templates->where('id',$request->template_id)->first();
        $layouts = $changedTemplate->layoutsByThisTemplate;

        if($info){
            return view('edit-update',['info' => $info, 'layouts' => $layouts, 'templates' => $templates, 'changedTemplate' => $changedTemplate]);
        }

        abort('404');
    }

    public function update_template(Request $request, $slug,Page $page){
        $info = $page->findBySlug($slug);
        $info->update(['template_id' =>  $request->template_id]);
        return back();
    }

    public function set_form(Request $request, Page $page){

        $requestData = $request->all();
        $slug = $request->slug;
        $page = $page->findBySlug($slug);

        if($page){
           $slug = 'error';
        }
        else{
            $createdPage = Page::create($requestData);

            if ($request->hasFile('image')) {
                $createdPage->image = $request->file('image')->getClientOriginalName();
                $createdPage->save();
                $request->file('image')->move('images',$request->file('image')->getClientOriginalName());

            }
            if ($request->hasFile('body_image')) {

                $createdPage->body_image = $request->file('body_image')->getClientOriginalName();
                $createdPage->save();
                $request->file('body_image')->move('images', $request->file('body_image')->getClientOriginalName());
            }

        }

        return redirect()->route('wow-page',['slug' => $slug]);
    }

    public function store_page(Request $request, Page $page, $slug){

            $requestData = $request->all();
            $updatedPage = $page->findBySlug($slug);
            $updatedPage->update($requestData);

            if ($request->hasFile('image')) {

                $updatedPage->image = $request->file('image')->getClientOriginalName();
                $updatedPage->save();
                $request->file('image')->move('images', $request->file('image')->getClientOriginalName());
            }

            if ($request->hasFile('body_image')) {

                $updatedPage->body_image = $request->file('body_image')->getClientOriginalName();
                $updatedPage->save();
                $request->file('body_image')->move('images', $request->file('body_image')->getClientOriginalName());
            }

            return redirect()->route('wow-page',['slug' => $slug]);

    }


    public function users(){
        $userId = Auth::id();
        $users = User::where('id','!=',$userId)->get();
        return view('user',['users' => $users]);
    }

    public function add_user($id){
        User::find($id)->update(['role' => 'admin']);
        return back();
    }

    public function delete_page($slug){

        $page = Page::findBySlug($slug);
        $page->delete();
        return back();
    }

    public function delete_user($id){

        $user = User::find($id);
        $user->role = '';
        $user->save();
        return back();
    }

    public function reset(){
        return view('auth.passwords.reset',['token' => csrf_token()]);
    }

}
