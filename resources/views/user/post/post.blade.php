@extends('user.template')

@section('header-image',asset('user/img/post-bg.jpg') )
@section('head')
<link href="{{ asset('user/css/prism.css') }}" rel="stylesheet">
@endsection

@section('blog_header_title',$post->title )
@section('blog_header_subtitle',$post->subtitle )
@section('header')
    @include('user.post.partials.header')
@endsection
@section('main')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=170187526981621&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <small>Created at {{ $post->created_at->diffForHumans() }}</small>
                    <small class="pull-right" style="margin-right:20px">
                        @foreach($post->categories as $postCategory)
                            <a href="{{ route('post.category.page',$postCategory->slug) }}">{{ $postCategory->name }}</a>
                        @endforeach
                    </small>
                    {!!  $post->body !!}
					
					<div class="tag">
						<h3 class="tag__h3">Tags</h3>
						@foreach($post->tags as $postTag)
							<a href="{{ route('post.tag.page',$postTag->slug) }}"><small class="tag__body">{{ $postTag->name }}</small></a>
						@endforeach
					</div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="10" data-width="700px"></div>
                </div>
				
            </div>
        </div>
    </article>
@endsection