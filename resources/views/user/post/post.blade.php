@extends('user.template')

@section('header-image',asset('user/img/post-bg.jpg') )
@section('blog_header_title',$post->title )
@section('blog_header_subtitle',$post->subtitle )
@section('header')
    @include('user.post.partials.header')
@endsection
@section('main')
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <small>Created at {{ $post->created_at->diffForHumans() }}</small>
                    <small class="pull-right" style="margin-right:20px">
                        @foreach($post->categories as $postCategory)
                            {{ $postCategory->name }}
                        @endforeach
                    </small>
                    {!!  $post->body !!}

                    <h3 class="tag_h3">Tags</h3>
                    @foreach($post->tags as $postTag)
                        <small class="tag">{{ $postTag->name }}</small>
                    @endforeach
                </div>
            </div>
        </div>
    </article>
@endsection