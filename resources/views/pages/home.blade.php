@extends('layouts.default')
@section('title', 'home')
@section('description', 'This is the personal homepage of floppydisk.')
@section('content')
        <h1>About me</h1>
        <p>Hi!<br/>
            This is the personal homepage of floppydisk.
        </p>
        <h2>Interests</h2>
        <p>
            &#9670; <b>Tech Theatre</b> - Lighting, Stage Management, etc.<br/>
            &#9670; <b>Programming</b>&nbsp; - HTML, JavaScript, C#, Java, PHP, Ruby<br/>
            &#9670; <b>Photography</b>&nbsp; - <a href="https://www.flickr.com/photos/floppydisk/">Flickr</a>
        </p>

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
            <strong>SDF:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://floppydisk.sdf.org/">~floppydisk</a><br/>
            <a href="https://stackoverflow.com/users/15933092/floppydisk"><img src="https://stackoverflow.com/users/flair/15933092.png?theme=dark" width="208" height="58" alt="profile for floppydisk at Stack Overflow, Q&amp;A for professional and enthusiast programmers" title="profile for floppydisk at Stack Overflow, Q&amp;A for professional and enthusiast programmers"></a>
        </p>
@stop
