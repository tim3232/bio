<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    protected $fillable = ['image','body_image','slug','title','description','route','layout_id','text','template_id'];

    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->first();
    }

    public function templates(){
        return $this->hasOne(Template::class,'id','template_id');
    }

    public function pageHasLayout(){
        return $this->hasOne(Layout::class,'id','layout_id');
    }

}


