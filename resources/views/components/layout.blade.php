<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global -->
    <meta charset="utf-8">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f27405">
    <title>wah! (dot moe)</title>
    <link rel="stylesheet" href="{{ asset('/css/master.css') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('/favicon-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" type="image/png" href="{{ asset('/favicon-16x16.png') }}" sizes="16x16"/>
    {!! (intval(date('n')) == 12) ? '<script src="/js/christmas/snowstorm.js"></script>' : '' !!}

    <!-- Page-specific -->
    <meta property="og:title" content="wah! (dot moe) - {{ $title }}">
    <meta property="og:image" content="/favicon-128x128.png">
</head>
<body>
    <div class="page-container">
        <div id="header">
            <div>
                <img src="{{ asset('/images/logo.png') }}" width="65">
            </div>
            <div>
                <h1>wah!</h1>
                <p>
                    (dot moe)
                </p>
                <x-navigation></x-navigation>
            </div>
        </div>
        <div id="content">
            {{ $slot }}
        </div>
        <div id="footer">
            <div>
                <span>
                    &copy; floppydisk 2021-{{ date('Y') }}<br>
                    v{{ config('app.version') }}, <a href="https://git.frzn.dev/fwoppydwisk/diskfloppy.me/releases/latest">Source</a><br>
                    Served by {{ gethostname() }}
                </span>
            </div>
            <div>
                <a href="https://aliceisvery.gay/"><img src="{{ URL::asset('images/buttons/cnfunknown.gif') }}" alt="ConfusionUnknown"></a>
                <a href="https://julimiro.eu/"><img src="{{ URL::asset('images/buttons/juli.gif') }}" alt="Julimiro.eu"></a>
                <a href="https://x86.isafox.gay/"><img src="{{ URL::asset('images/buttons/x86.gif') }}" alt="x86Overflow"></a>
                <a href="https://thinliquid.dev/"><img src="{{ URL::asset('images/buttons/thnlqd.png') }}" alt="thinliquid"></a>
                <a href="https://dimden.dev/"><img src="https://dimden.dev/services/images/88x31.gif" alt="dimden.dev"></a>
                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS"><img src="{{ URL::asset('images/buttons/csshard.gif') }}" alt="CSS is hard"></a><br>
                <a href="https://linux.org/"><img src="{{ URL::asset('images/buttons/linuxnow.gif') }}" alt="Linux NOW!"></a>
                <img src="{{ URL::asset('images/buttons/paws.gif') }}" alt="Made with my own two paws">
                <img src="{{ URL::asset('images/buttons/transrights.gif') }}" alt="Trans Rights NOW!">
                <a href="https://www.debian.org/"><img src="{{ URL::asset('images/buttons/debian.gif') }}" alt="Powered by Debian"></a>
                <a href="https://www.vim.org/"><img src="{{ URL::asset('images/buttons/vim.gif') }}" alt="Vim"></a>
                <img src="{{ URL::asset('images/buttons/aliasing.png') }}" alt="I Heart Aliasing">
            </div>
        </div>
    </div>
</body>
</html>
