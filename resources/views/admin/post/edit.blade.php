@extends('admin.template')

@section('postHeadSection')
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection
@section('main')
    @include('admin.post.partials.update_post_form',[
        'post' => $post,
    ])
@endsection

@section('postFooterSection')
    <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
    <script >
        $(".select2").select2();
    </script>
@endsection