@extends('admin.template')

@section('main')
    @include('admin.tag.partials.update_tag_form',[
        'tag' => $tag,
    ])
@endsection