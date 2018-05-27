@extends('admin.template')

@section('postHeadSection')
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection
@section('main')
    @include('admin.post.partials.create_post_form')
@endsection

@section('postFooterSection')
 {{--   <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>--}}
    <script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    <script >
      $(function () {
          CKEDITOR.replace('editor1',{
              height: 800
          });
          $(".textarea").wysihtml5();
      });
      $(".select2").select2();
    </script>
@endsection