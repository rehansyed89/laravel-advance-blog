@extends('admin.template')

@section('headSection')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('main')
    @include('admin.post.partials.body',[
        'posts' => $posts,
    ])
@endsection

@section('footerSection')
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        function destroyPost(post_id){
            if(confirm('Delete this post?')){
                event.preventDefault();document.getElementById(post_id).submit();
            }else{
                event.preventDefault();
            }
        }
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@endsection