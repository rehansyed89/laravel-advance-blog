@extends('admin.template')

@section('main')
    @include('admin.role.partials.create_role_form',[
        'permissions' => $permissions,
    ])
@endsection