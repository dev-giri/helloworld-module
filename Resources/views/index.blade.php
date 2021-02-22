@extends('helloworld::layouts.master')

@section('title', config('helloworld.name'))

@section('page-style')
{{-- Module Mix - CSS File --}}
{{-- <link rel="stylesheet" href="{{ mix('css/helloworld.css') }}"> --}}
@endsection

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('helloworld.name') !!}
    </p>
@endsection

@section('page-script')
{{-- Module Mix - JS File --}}
{{-- <script src="{{ mix('js/helloworld.js') }}"></script> --}}
@endsection