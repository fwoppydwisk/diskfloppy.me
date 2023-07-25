@extends('layouts.default')
@section('title', 'Home')
@section('description', 'This is the personal homepage of floppydisk.')
@section('content')
    <p>Hi! This my personal homepage on the <strong>W</strong>orld <strong>W</strong>ide <strong>W</strong>eb.
    </p>

    <table class="infotable">
        <tr>
            <td colspan="2">
                <h1>Interests</h1>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
            </td>
        </tr>
        <tr>
            <td>&#9670; <b>Tech Theatre</b></td>
            <td>- Lighting, Stage Management, etc.</td>
        </tr>
        <tr>
            <td>&#9670; <b>Programming</b></td>
            <td>- HTML, JavaScript, C#, Java, PHP, Ruby</td>
        </tr>
        <tr>
            <td>&#9670; <b>Photography</b></td>
            <td>- <a href="https://www.flickr.com/photos/floppydisk/">Flickr</a></td>
        </tr>
    </table>
    <br>

    {{--
        <!-- Last.fm -->
        @include('components.lastfm')

        <!-- WeatherData -->
        @include('components.weather')

        <!-- Site Updates -->
        @include('components.git')
        --}}

    <table class="infotable">
        <tr>
            <td colspan="2">
                <h1>Contact &amp; social</h1>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
            </td>
        </tr>
        <tr>
            <td><strong>E-mail</strong></td>
            <td><a href="mailto:contact@diskfloppy.me">contact (at) diskfloppy (dot) me</a></td>
        </tr>
        <tr>
            <td><strong>Mastodon:</strong></td>
            <td><a rel="me" href="https://c.im/@floppydisk">@floppydisk@c.im</a></td>
        </tr>
        <tr>
            <td><strong>Matrix:</strong></td>
            <td><a href="https://matrix.to/#/@floppydisk:arcticfoxes.net">@floppydisk:arcticfoxes.net</a></td>
        </tr>
        <tr>
            <td><strong>GitHub:</strong></td>
            <td><a href="https://github.com/floppydisk05">floppydisk05</a></td>
        </tr>
        <!--<tr>
                    <td colspan="2">
                        <a href="https://stackoverflow.com/users/15933092/floppydisk"><img
                                src="https://stackoverflow.com/users/flair/15933092.png?theme=dark" width="208" height="58"
                                alt="profile for floppydisk at Stack Overflow, Q&amp;A for professional and enthusiast programmers"
                                title="profile for floppydisk at Stack Overflow, Q&amp;A for professional and enthusiast programmers"></a>
                    </td>
                </tr>-->
    </table>
@stop
