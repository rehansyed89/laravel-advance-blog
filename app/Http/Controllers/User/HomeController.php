<?php

namespace App\Http\Controllers\User;

use App\Model\User\category;
use App\Model\User\post;
use App\Model\User\tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(4);
        return view('user.home.list',compact('posts'));
    }
    public function tag(tag $tag){
        $posts = $tag->posts();
        return view('user.home.list',compact('posts'));
    }
    public function category(category $category){
        $posts = $category->posts();
        return view('user.home.list',compact('posts'));
    }
}
