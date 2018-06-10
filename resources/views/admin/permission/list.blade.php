@extends('admin.template')

@section('headSection')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('main')
    @include('admin.permission.partials.body',[
        'permissions' =>$permissions,
    ])
@endsection

@section('footerSection')
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        function destroyPermission(permission_id){
            if(confirm('Delete this permission?')){
                event.preventDefault();document.getElementById(permission_id).submit();
            }else{
                event.preventDefault();
            }
        }
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@endsection