<?php $categories = app('config')->get('projects'); ?>
@extends('layouts.default')
@section('title', 'test')
@section('description', 'This is the personal homepage of floppydisk.')
@section('content')
@foreach ($categories as $category)
    <h1>{{ $category->name}}</h1>
    @foreach ($category->projects as $project)
        <div>
            <a href="{{ $project->url }}">{{ $project->name }}</a> - {{ $project->description }}<br/>
            <b>Languages:</b> {{ implode(", ", $project->languages) }}
        </div>
        <br/>
    @endforeach
@endforeach
@stop
