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
    {!! (intval(date('n')) == 12) ? '<script src="/js/christmas/snow.js"></script>' : '' !!}

    <!-- Page-specific -->
    <title>{{ $title ?? 'Unknown' }} - {{ str_replace("www.", "", Request::getHost()) }}</title>
    <meta property="og:title" content="{{ str_replace("www.", "", Request::getHost()) }} | {{ $title }}">
    <meta property="og:image" content="/favicon-128x128.png">
</head>
<body onload="setSchemeSelector()">
<div class="page">
    <div id="header" class="header">
        <x-navbar title="{{ $title }}"/>
        <hr>
    </div> <!-- header -->
    <div id="content" class="content" role="main">
        {{ $slot }}
    </div> <!-- content -->
    <div id="footer" class="footer">
        <hr>
        <div class="footer" role="contentinfo">
            <a href="https://dimden.dev/" class="button">
                <img src="https://dimden.dev/services/images/88x31.gif" width="88" height="31"
                     class="pixel" alt="dimden.dev">
            </a>&nbsp;
            <a href="https://www.linux.org/" class="button">
                <img src="{{ URL::asset('images/buttons/linuxnow.gif') }}" width="88"
                     class="pixel" height="31" alt="Linux NOW!">
            </a>&nbsp;
            <a href="https://www.vim.org/" class="button">
                <img src="{{ URL::asset('images/buttons/vim.gif') }}" width="88" height="31"
                     class="pixel" alt="vim">
            </a>&nbsp;
            <a href="https://wave.webaim.org/" class="button">
                <img src="{{ URL::asset('images/buttons/evaluatedWAVE.png') }}" width="88" height="31"
                     class="pixel" alt="Evaluated to be accessible!">
            </a>&nbsp;
            <a href="https://jigsaw.w3.org/css-validator/check/referer" class="button">
                <img src="{{ URL::asset('images/buttons/vcss-blue.gif') }}" width="88" height="31"
                     class="pixel" alt="Valid CSS!">
            </a>&nbsp;
            <a href="https://wiby.me/" class="button">
                <img src="{{ URL::asset('images/buttons/wiby.gif') }}" width="88" height="31"
                     class="pixel" alt="Wiby - Search Engine for the Classic Web">
            </a><br>
            <p>This site is best viewed at 1024x768 with 16-bit color or better<br>
            &copy; floppydisk 2021-{{ date('Y') }}, v{{ config('app.version') }}, <a
                href="https://github.com/floppydisk05/diskfloppy.me">Source</a>,
            Served by {{ gethostname() }}<br>
            <label for="scheme-selector">Color Scheme:</label>
            <select id="scheme-selector">
                <optgroup label="Misc">
                    <option value="c64">C64</option>
                </optgroup>
                <optgroup label="Light">
                    <option value="catppuccin-latte">Catppuccin Latte</option>
                    <option value="gruvbox">Gruvbox</option>
                    <option value="man-page">Man Page</option>
                    <option value="papercolor-light">Papercolor Light</option>
                    <option value="rose-pine-dawn">Rosé Pine Dawn</option>
                    <option value="solarized-light">Solarized Light</option>
                    <option value="terminal-basic">Terminal Basic</option>
                </optgroup>
                <optgroup label="Dark">
                    <option value="catppuccin-frappe">Catppuccin Frappé</option>
                    <option value="catppuccin-macchiato" selected="selected">Catppuccin Macchiato</option>
                    <option value="catppuccin-mocha">Catppuccin Mocha</option>
                    <option value="gruvbox-dark">Gruvbox Dark</option>
                    <option value="gruvbox-material">Gruvbox Material</option>
                    <option value="maia">Maia</option>
                    <option value="mono-amber">Mono Amber</option>
                    <option value="mono-cyan">Mono Cyan</option>
                    <option value="mono-green">Mono Green</option>
                    <option value="mono-red">Mono Red</option>
                    <option value="mono-white">Mono White</option>
                    <option value="mono-yellow">Mono Yellow</option>
                    <option value="papercolor-dark">Papercolor Dark</option>
                    <option value="rose-pine">Rosé Pine</option>
                    <option value="rose-pine-moon">Rose Pine Moon</option>
                    <option value="shel">Shel</option>
                    <option value="slate">Slate</option>
                    <option value="solarized-dark">Solarized Dark</option>
                </optgroup>
            </select>
            <button onclick="swapScheme()">Apply</button></p>
        </div>
    </div> <!-- footer -->
</div> <!-- page -->
</body>
</html>
