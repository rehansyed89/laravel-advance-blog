@extends('user.template')
@section('blog_header_title','My Blog' )
@section('blog_header_subtitle','Blogger\'s World' )
@section('header-image',asset('user/img/home-bg.jpg'))
@section('header')
    @include('user.home.partials.header')
@endsection
@section('main')
    @include('user.home.partials.body',[
        'posts' => $posts,
    ])
@endsection