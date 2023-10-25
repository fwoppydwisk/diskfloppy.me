@extends('layouts.default')
@section('title', 'Home')
@section('description', 'This is the personal homepage of floppydisk.')
@section('content')
    <p>Hi! This my personal homepage on the <strong>W</strong>orld <strong>W</strong>ide <strong>W</strong>eb.</p>

    <table class="info-table" role="presentation">
        <caption>
            <h2>Fun Facts</h2>
            <hr>
        </caption>
        <tr>
            <td>&#9670; I am (unfortunately) British</td>
        </tr>
        <tr>
            <td>&#9670; I watched the entirety of The Owl House (~18 hours) in under 48 hours.</td>
        </tr>
        <tr>
            <td>&#9670; I spend way too much time on my computer.</td>
        </tr>
        <tr>
            <td>&#9670; Some people say I suck at PHP, but that's clearly wrong :P</td>
        </tr>
        <tr>
            <td>&#9670; Some of my favorite games are: OneShot, Minecraft, Stardew Valley, N++ and Starbound</td>
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
            <td>- Lighting, Stage Management, etc.</td>
        </tr>
        <tr>
            <td>&#9670; <b>Programming</b></td>
            <td>- HTML, CSS, JavaScript, C#, Java, PHP, Ruby, Python</td>
        </tr>
        <tr>
            <td>&#9670; <b>Photography</b></td>
            <td>- <a href="https://www.flickr.com/photos/floppydisk/">Flickr</a></td>
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
        <tr>
            <td><strong>GitHub:</strong></td>
            <td><a href="https://github.com/floppydisk05">floppydisk05</a></td>
        </tr>
    </table>
@stop
