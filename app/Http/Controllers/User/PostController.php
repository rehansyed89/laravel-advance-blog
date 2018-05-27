<?php

namespace App\Http\Controllers\User;

use App\Model\User\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(post $post){

        return view('user.post.post',compact('post'));
    }
}
