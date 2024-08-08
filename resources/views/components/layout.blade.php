@php // Get colorscheme from cookie and apply immediately
    $colorscheme = request()->cookie('colorscheme', 'catppuccin-macchiato');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global -->
    <meta charset="utf-8">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#333333">
    <link rel="stylesheet" href="{{ asset("/css/colorschemes/$colorscheme.css") }}" id="css-colorscheme"/>
    <link rel="stylesheet" href="{{ asset('/css/master.css') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('/favicon-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" type="image/png" href="{{ asset('/favicon-16x16.png') }}" sizes="16x16"/>
    <script src="{{ asset('/js/schemeSwap.js') }}"></script>
    <script src="{{ asset('/js/liveClock.js') }}"></script>
    {!! (intval(date('n')) == 12) ? '<script src="/js/christmas/snow.js"></script>' : '' !!}

    <!-- Page-specific -->
    <title>{{ $title ?? 'Unknown' }} - {{ str_replace("www.", "", Request::getHost()) }}</title>
    <meta property="og:title" content="{{ str_replace("www.", "", Request::getHost()) }} | {{ $title }}">
    <meta property="og:image" content="/favicon-128x128.png">
</head>
<body onload="setSchemeSelector()">
<div class="container">
    <div class="page">
        <div class="header">
            <h1>{{ str_replace("www.", "", Request::getHost()) }}</h1>
        </div>
        <div class="navbar">
            <p>
                <strong>Current Path:</strong>
                @if(Request::getRequestUri() == "/")
                    /
                @else
                    {{ str_replace("/", " / ", rtrim(Request::getRequestUri(), "/")) }}
                @endif
            </p>
        </div>
        <div class="content">
            <div class="main">
                {{ $slot }}
            </div>
            <div class="sidebar">
                <div class="section"><x-navigation/></div>
                <div class="section"><x-settings/></div>
                <div class="section centerbox"><x-online-status/></div>
                <div class="section"><x-weather/></div>
            </div>
        </div>
        <div class="footer">
            <div>
                (c) floppydisk 2021-{{ date('Y') }}<br>
                v{{ config('app.version') }}, <a href="https://git.frzn.dev/fwoppydwisk/diskfloppy.me/releases/latest">Source</a><br>
                Served by {{ gethostname() }}
            </div>
            <div>
                <a href="https://dimden.dev/" class="button">
                    <img src="https://dimden.dev/services/images/88x31.gif" width="88" height="31"
                         class="pixel" alt="dimden.dev">
                </a>
                <a href="https://www.linux.org/" class="button">
                    <img src="{{ URL::asset('images/buttons/linuxnow.gif') }}" width="88"
                         class="pixel" height="31" alt="Linux NOW!">
                </a>
                <a href="https://www.vim.org/" class="button">
                    <img src="{{ URL::asset('images/buttons/vim.gif') }}" width="88" height="31"
                         class="pixel" alt="vim">
                </a><br>
                <a href="https://wave.webaim.org/" class="button">
                    <img src="{{ URL::asset('images/buttons/evaluatedWAVE.png') }}" width="88" height="31"
                         class="pixel" alt="Evaluated to be accessible!">
                </a>
                <a href="https://jigsaw.w3.org/css-validator/check/referer" class="button">
                    <img src="{{ URL::asset('images/buttons/vcss-blue.gif') }}" width="88" height="31"
                         class="pixel" alt="Valid CSS!">
                </a>
                <a href="https://wiby.me/" class="button">
                    <img src="{{ URL::asset('images/buttons/wiby.gif') }}" width="88" height="31"
                         class="pixel" alt="Wiby - Search Engine for the Classic Web">
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
