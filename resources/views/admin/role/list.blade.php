@extends('admin.template')

@section('headSection')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('main')
    @include('admin.role.partials.body',[
        'roles' =>$roles,
    ])
@endsection

@section('footerSection')
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        function destroyRole(role_id){
            if(confirm('Delete this role?')){
                event.preventDefault();document.getElementById(role_id).submit();
            }else{
                event.preventDefault();
            }
        }
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@endsection