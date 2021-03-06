<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    protected $fillable = ['type','description','name','image'];

    public function getTemplate(){
        return $this->belongsToMany(Template::class,'layout_templates');
    }
}


