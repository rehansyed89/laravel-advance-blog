<?php

namespace App\Http\Controllers\User;

use App\Model\User\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $posts = post::where('status',1)->paginate(2);
        return view('user.home.list',compact('posts'));
    }
}
