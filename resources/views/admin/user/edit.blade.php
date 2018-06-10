@extends('admin.template')

@section('main')
    @include('admin.user.partials.update_user_form',[
        'user' => $user,
        'roles' => $roles,
    ])
@endsection