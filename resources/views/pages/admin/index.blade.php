@extends('layouts.default-admin')
@section('title', 'Page Title')
@section('description', 'Page description goes here')
@php
    $user = auth()->user();
@endphp
@section('content')
    <p>You are logged in as {{ $user->name }} ({{ $user->email }})</p>
@stop
