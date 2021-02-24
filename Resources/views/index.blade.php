@extends('todo::layouts.master')

@section('title', config('todo.name'))

@section('vendor-style')
  {{-- Vendor css files --}}

@endsection

@section('page-style')
{{-- Module Mix - CSS File --}}
{{-- <link rel="stylesheet" href="{{ mix('css/todo.css') }}"> --}}
@endsection

@section('content')
    <h1>Todo</h1>

    <p>
        This view is loaded from module: {!! config('todo.name') !!}
    </p>
@endsection

@section('vendor-script')
  {{-- Vendor js files --}}
  
@endsection

@section('page-script')
{{-- Module Mix - JS File --}}
{{-- <script src="{{ mix('js/todo.js') }}"></script> --}}
@endsection