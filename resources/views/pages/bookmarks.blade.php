@extends('layouts.default')
@section('title', 'bookmarks')
@section('description', 'This is the personal homepage of floppydisk.')
@section('content')
@php
    $categories = DB::select('
        SELECT id, name
        FROM bookmark__categories
        ORDER BY priority ASC
    ');
@endphp

@foreach ($categories as $category)
    <h1>{{ $category->name }}</h1>
    @php
        $sites = DB::select('
            SELECT name, url, description
            FROM bookmark__sites
            WHERE category_id = ? ORDER BY priority ASC
        ', array($category->id));
    @endphp
    <ul>
    @foreach ($sites as $site)
        <li><a href="{{ $site->url }}">{{ $site->name }}</a> - {{ $site->description }}</li>
    @endforeach
    </ul>
@endforeach
@stop
