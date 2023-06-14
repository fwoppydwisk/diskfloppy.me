<?php $categories = app('config')->get('bookmarks'); ?>
@extends('layouts.default')
@section('title', 'bookmarks')
@section('description', 'This is the personal homepage of floppydisk.')
@section('content')
@foreach ($categories as $category)
    <h1>{{ $category['name'] }}</h1>
    <ul>
    @foreach ($category['bookmarks'] as $bookmark)
        <li><a href="{{ $bookmark['url'] }}">{{ $bookmark['name'] }}</a> - {{ $bookmark['description'] }}</li>
    @endforeach
    </ul>
@endforeach
@stop
