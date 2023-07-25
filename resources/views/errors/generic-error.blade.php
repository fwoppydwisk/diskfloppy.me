@extends('layouts.minimal')
@section('title', 'Error 401: Unauthorized User!')
@section('content')
    <h1>{{ $error }}</h1>
    <hr>
    @if(isset($description))
        <p>{{ $description }}</p>
    @endif
@stop
