@extends('admin.template')

@section('main')
    @include('admin.post.partials.create_post_form')
@endsection

@section('postFooterSection')
    <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
@endsection