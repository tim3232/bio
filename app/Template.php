<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{

    protected $fillable = ['name','layout_id'];

    public function layoutsByThisTemplate(){
        return $this->belongsToMany(Layout::class,'layout_templates','template_id','layout_id');
    }
}


