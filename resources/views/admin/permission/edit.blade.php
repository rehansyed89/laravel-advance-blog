@extends('admin.template')

@section('main')
    @include('admin.permission.partials.update_permission_form',[
        'permission' => $permission,
    ])
@endsection