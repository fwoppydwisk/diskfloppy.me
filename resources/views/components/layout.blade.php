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
<body>
<div class="page-container">
    <div>
        <div id="site-header">
            <h1>niko's site</h1>
        </div>
        <div><x-navigation/></div>
        <div class="section centerbox"><x-discord-status/></div>
        <div class="section"><x-weather/></div>
    </div>
    <div>
        {{ $slot }}
    </div>
    <div class="footer">
        <div>
            (c) floppydisk 2021-{{ date('Y') }}<br>
            v{{ config('app.version') }},
            <a href="https://git.frzn.dev/fwoppydwisk/diskfloppy.me/releases/latest">Source</a><br>
            Served by {{ gethostname() }}
        </div>
        <div>
            <a href="https://confusionunknown.nekoweb.org/" class="button">
                <img src="{{ URL::asset('images/buttons/cnfunknown.gif') }}" width="88" height="31"
                     class="pixel" alt="confusionunknown">
            </a>
            <a href="https://julimiro.eu/" class="button">
                <img src="{{ URL::asset('images/buttons/juli.gif') }}" width="88" height="31"
                     class="pixel" alt="julimiro">
            </a>
            <a href="https://x86.breadtf.com/" class="button">
                <img src="{{ URL::asset('images/buttons/x86.gif') }}" width="88" height="31"
                     class="pixel" alt="x86Overflow">
            </a>
            <img src="{{ URL::asset('images/buttons/transrights.gif') }}" width="88" height="31"
                 class="pixel" alt="Trans rights now!">
            <img src="{{ URL::asset('images/buttons/yuri.gif') }}" width="88" height="31"
                 class="pixel" alt="Catgirl yuri now!">
            <img src="{{ URL::asset('images/buttons/brokenimage.gif') }}" width="88" height="31"
                 class="pixel" alt="Made with my own two paws"><br>
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
            </a>
            <a href="https://wave.webaim.org/" class="button">
                <img src="{{ URL::asset('images/buttons/evaluatedWAVE.png') }}" width="88" height="31"
                     class="pixel" alt="Evaluated to be accessible!">
            </a>
            <img src="{{ URL::asset('images/buttons/aliasing.png') }}" width="88" height="31"
                 class="pixel" alt="I heart aliasing!">
            <img src="{{ URL::asset('images/buttons/paws.gif') }}" width="88" height="31"
                 class="pixel" alt="Made with my own two paws">
        </div>
    </div>
</div>

</body>
</html>

{{--<div class="container">--}}
{{--    <div class="page">--}}
{{--        <header>--}}
{{--            <h1>{{ str_replace("www.", "", Request::getHost()) }}</h1>--}}
{{--        </header>--}}
{{--        <div class="navbar">--}}
{{--            <p>--}}
{{--                <strong>Current Path:</strong>--}}
{{--                @if(Request::getRequestUri() == "/")--}}
{{--                    /--}}
{{--                @else--}}
{{--                    {{ str_replace("/", " / ", rtrim(Request::getRequestUri(), "/")) }}--}}
{{--                @endif--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <div class="content">--}}
{{--            <main>--}}
{{--                {{ $slot }}--}}
{{--            </main>--}}
{{--            <div class="sidebar">--}}
{{--                <div class="section"><nav><x-navigation/></nav></div>--}}
{{--                <div class="section"><x-settings/></div>--}}
{{--                <div class="section centerbox"><x-discord-status/></div>--}}
{{--                <div class="section"><x-weather/></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <footer>--}}
{{--            <div>--}}
{{--                (c) floppydisk 2021-{{ date('Y') }}<br>--}}
{{--                v{{ config('app.version') }},--}}
{{--                <a href="https://git.frzn.dev/fwoppydwisk/diskfloppy.me/releases/latest">Source</a>,--}}
{{--                <a href="/privacy">Privacy Policy?</a><br>--}}
{{--                Served by {{ gethostname() }}--}}
{{--            </div>--}}
{{--            <div>--}}

{{--            </div>--}}
{{--        </footer>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
