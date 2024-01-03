@extends('layouts.default')
@section('title', 'Home')
@section('description', 'This is the personal homepage of floppydisk.')
@section('content')
    <p>Hi! This is my personal homepage on the <strong>W</strong>orld <strong>W</strong>ide <strong>W</strong>eb.</p>

    <table class="info-table" role="presentation">
        <caption>
            <h2>QuickFacts&trade;</h2>
            <hr>
        </caption>
        <tr>
            <td>&#9670; 18 y/o, he/him, British</td>
        </tr>
        <tr>
            <td>&#9670; Theatre Technician, &quot;Web Developer&quot; and NixOS User</td>
        </tr>
        <tr>
            <td>&#9670; Loves ETC desks, prefers Generics to LEDs for some reason</td>
        </tr>
        <tr>
            <td>&#9670; Spends way too much time on his computer</td>
        </tr>
        <tr>
            <td>&#9670; Favorite games: <a href="https://steamcommunity.com/id/floppydisk05/recommended/420530/">OneShot</a>, Minecraft, Stardew Valley, N++ and Starbound</td>
        </tr>
    </table>
    <br>

    <table class="info-table" role="presentation">
        <caption>
            <h2>Interests</h2>
            <hr>
        </caption>
        <tr>
            <td>&#9670; <b>Tech Theatre</b></td>
            <td>- Lighting, Stage Management, etc. (<a href="https://www.controlbooth.com/members/floppydisk.28673/">ControlBooth</a>)</td>
        </tr>
        <tr>
            <td>&#9670; <b>Programming</b></td>
            <td>- HTML, CSS, JavaScript, C#, Java, PHP, Ruby, Python (<a href="https://github.com/floppydisk05">GitHub</a>)</td>
        </tr>
        <tr>
            <td>&#9670; <b>Photography</b></td>
            <td>- <a href="https://www.flickr.com/photos/floppydisk/">Flickr</a></td>
        </tr>
        <tr>
            <td>&#9670; <b>Gaming</b></td>
            <td>- <a href="https://steamcommunity.com/id/floppydisk05/">Steam Profile</a></td>
        </tr>
    </table>
    <br>

    <table class="info-table never-said" role="presentation">
        <caption>
            <h2>Things they never said</h2>
            <hr>
        </caption>
        <tr>
            <script type="text/javascript" src="/js/neverSaid.js"></script>
            <noscript><td>Oops! You need JavaScript enabled to view this content.</td></noscript>
        </tr>
    </table>
    <br>

    <table class="info-table" role="presentation">
        <caption>
            <h2>Contact &amp; social</h2>
            <hr>
        </caption>
        <tr>
            <td><strong>E-mail:</strong></td>
            <td><a href="mailto:contact@diskfloppy.me">contact@diskfloppy.me</a></td>
        </tr>
        <tr>
            <td><strong>Mastodon:</strong></td>
            <td><a rel="me" href="https://c.im/@floppydisk">@floppydisk@c.im</a></td>
        </tr>
        <tr>
            <td><strong>Matrix:</strong></td>
            <td><a href="https://matrix.to/#/@floppydisk:arcticfoxes.net">@floppydisk:arcticfoxes.net</a></td>
        </tr>
    </table>
@stop
