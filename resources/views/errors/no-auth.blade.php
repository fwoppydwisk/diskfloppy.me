@extends('layouts.minimal')
@section('title', 'Error 401: Unauthorized User!')
@section('content')
    <h1>Error 401: Unauthorized User!</h1>
    <hr/>
    <p>Woah there! Only authorized users can access this page. Please <a href="/login">log in</a> to proceed.</p>
    <p>Ended up here on accident? Click <a href="/">here</a> to return to the homepage</u>!</p>
@stop
