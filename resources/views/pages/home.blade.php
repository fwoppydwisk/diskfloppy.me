@extends('layouts.default')
@section('title', 'home')
@section('description', 'This is the personal homepage of floppydisk.')
@section('content')
<p>Hi!</p>
        <p>This is the personal homepage of floppydisk.</p>

        <!-- Last.fm -->
        @include('components.lastfm')

        <!-- WeatherData -->
        @include('components.weather')

        <h1>Contact</h1>
        <p><strong>Mail</strong>:&nbsp;<a href="mailto:contact@diskfloppy.me">contact@diskfloppy.me</a><br/>
            <strong>IRC</strong>:&nbsp;&nbsp;<a href="https://r-type.ca/page.php?id=1034">floppydisk @ r-type</a><br/>
        </p>

        <h1>Elsewhere</h1>
        <p><strong>Mastodon:</strong>&nbsp;<a rel="me" href="https://c.im/@floppydisk">@floppydisk@c.im</a><br/>
            <strong>Matrix:</strong>&nbsp;&nbsp;&nbsp;<a href="https://matrix.to/#/@floppydisk:arcticfoxes.net">@floppydisk:arcticfoxes.net</a><br/>
            <strong>Twitter:</strong>&nbsp;&nbsp;<a href="https://twitter.com/floppydisk__">@floppydisk__</a><br/>
            <strong>GitHub:</strong>&nbsp;&nbsp;&nbsp;<a href="https://github.com/floppydisk05">floppydisk05</a><br/>
            <strong>SDF:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://floppydisk.sdf.org/">~floppydisk</a>
        </p>
@stop
