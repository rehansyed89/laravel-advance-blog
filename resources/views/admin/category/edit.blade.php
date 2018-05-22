@extends('admin.template')

@section('main')
    @include('admin.category.partials.update_category_form',[
        'category' => $category,
    ])
@endsection