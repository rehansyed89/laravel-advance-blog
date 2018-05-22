@extends('admin.template')

@section('main')
    @include('admin.post.partials.update_post_form',[
        'post' => $post,
    ])
@endsection

@section('postFooterSection')
    <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
@endsection