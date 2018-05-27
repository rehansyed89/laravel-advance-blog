<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        @foreach($posts as $post)
        <div class="post-preview">
            <a href="{{ route('post.page',$post->slug) }}">
                <h2 class="post-title">{{ $post->title }}</h2>
                <h3 class="post-subtitle">{{ $post->subtitle }}</h3>
            </a>
            <p class="post-meta">Posted by <a href="#">Rehan Mazhar</a> {{ $post->created_at->diffForHumans() }}</p>
        </div>
        <hr>
        @endforeach

        <ul class="pager">
            <li class="next">
                <a href="#">Older Posts &rarr;</a>
            </li>
        </ul>
    </div>
</div>