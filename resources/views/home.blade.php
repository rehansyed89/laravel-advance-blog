@extends('user.template')

@section('header-image',asset('user/img/contact-bg.jpg'))

@section('head')

@endsection
@section('blog_header_title','Welcome ' )
@section('blog_header_subtitle','' )
@section('header')
    @include('user.home.partials.header')
@endsection
@section('main')
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                Welcome {{ Auth::user()->name }} <br/><br/>
                Your email : {{ Auth::user()->email }}
            </div>
        </div>
    </article>

    <hr>
@endsection
@section('footer')
@endsection