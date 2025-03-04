@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="{{ asset('css/error.css') }}">
@endsection

@section('content')
<div class="error-container">
    <h1>404 Not Found</h1><br>
    <p>Your visited page not found. You may go to the home page.</p><br>
    <a href="{{ url('/') }}" class="btn1">Back to home page</a>
</div>
@endsection
