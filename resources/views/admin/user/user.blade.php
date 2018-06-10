@extends('admin.template')

@section('main')
    @include('admin.user.partials.create_user_form',[
        'roles' =>$roles,
    ])
@endsection