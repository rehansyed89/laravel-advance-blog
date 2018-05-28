<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function posts(){
        return $this->belongsToMany('App\Model\User\post','post_tags')->orderBy('created_at','DESC')->paginate(4);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
