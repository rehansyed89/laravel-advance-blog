@extends('admin.template')

@section('headSection')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('main')
    @include('admin.user.partials.body',[
        'users' =>$users
    ])
@endsection

@section('footerSection')
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        function destroyTag(user_id){
            if(confirm('Delete this user?')){
                event.preventDefault();document.getElementById(user_id).submit();
            }else{
                event.preventDefault();
            }
        }
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@endsection