@extends('aboutus::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('aboutus.name') !!}</p>
@endsection
