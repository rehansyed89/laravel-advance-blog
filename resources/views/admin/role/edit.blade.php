@extends('admin.template')

@section('main')
    @include('admin.role.partials.update_role_form',[
        'role' => $role,
        'permissions' => $permissions,
    ])
@endsection