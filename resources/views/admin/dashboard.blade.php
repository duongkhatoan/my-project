@extends('layout_admin.master')

@section('content')
    Welcome
    {{ auth('admin')->user()->name }}
@endsection
