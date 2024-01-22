@php // Get colorscheme from cookie and apply immediately
    $colorscheme = request()->cookie('colorscheme', 'catppuccin-macchiato');
@endphp
    <!-- Global -->
    <meta charset="utf-8">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#333333">
    <link rel="stylesheet" href="{{ asset("/css/colorschemes/{$colorscheme}.css") }}" id="css-colorscheme"/>
    <link rel="stylesheet" href="/css/master.css"/>
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16"/>
    <script src="/js/schemeSwap.js"></script>
    {!! (intval(date('n')) == 12) ? '<script src="/js/christmas/snow.js"></script>' : '' !!}

    <!-- Page-specific -->
    <title>@yield('title') - diskfloppy.me</title>
    <meta property="og:title" content="diskfloppy.me | @yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="/favicon-128x128.png">
    <meta name="description" content="@yield('description')">
