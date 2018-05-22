@extends('admin.template')
@section('headSection')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('main')
    @include('admin.category.partials.body',[
        'categories' =>$categories,
    ])
@endsection

@section('footerSection')
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        function destroyCategory(category_id){
            if(confirm('Delete this category?')){
                event.preventDefault();document.getElementById(category_id).submit();
            }else{
                event.preventDefault();
            }
        }
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@endsection