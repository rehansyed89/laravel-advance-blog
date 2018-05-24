<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function posts(){
        return $this->belongsToMany('App\Model\User\post','category_posts');
    }
}
