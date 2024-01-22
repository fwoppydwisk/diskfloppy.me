<hr>
<div class="footer" role="contentinfo">
    <a href="https://www.debian.org/">
        <img src="{{ URL::asset('images/buttons/debian.gif') }}"
             class="pixel" width="88" height="31" alt="Powered by Debian">&nbsp;
    </a>
    <a href="https://dimden.dev/">
        <img src="https://dimden.dev/services/images/88x31.gif" width="88" height="31"
             class="pixel" alt="dimden.dev">
    </a>&nbsp;
    <a href="https://www.linux.org/">
        <img src="{{ URL::asset('images/buttons/linuxnow.gif') }}" width="88"
             class="pixel" height="31" alt="Linux NOW!">
    </a>&nbsp;
    <a href="https://www.vim.org/">
        <img src="{{ URL::asset('images/buttons/vim.gif') }}" width="88" height="31"
             class="pixel" alt="vim">
    </a>&nbsp;
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img src="{{ URL::asset('images/buttons/vcss-blue.gif') }}" width="88" height="31"
             class="pixel" alt="Valid CSS!">
    </a>&nbsp;
    <a href="https://wiby.me/">
        <img src="{{ URL::asset('images/buttons/wiby.gif') }}" width="88" height="31"
             class="pixel" alt="Wiby - Search Engine for the Classic Web">
    </a><br>
    This site is best viewed at 1024x768 with 16-bit color or better<br>
    &copy; floppydisk 2021-{{ date('Y') }}, v{{ config('app.version') }}, <a
        href="https://github.com/floppydisk05/diskfloppy.me">Source</a>,
	Served by {{ gethostname() }}<br>
    <label for="scheme-selector">Color Scheme:</label>
    <select onchange="swapScheme(this.value)" id="scheme-selector">
        <optgroup label="Misc">
            <option value="c64">C64</option>
        </optgroup>
        <optgroup label="Light">
            <option value="catppuccin-latte">Catppuccin Latte</option>
            <option value="gruvbox">Gruvbox</option>
            <option value="man-page">Man Page</option>
            <option value="papercolor-light">Papercolor Light</option>
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
            <option value="shel">Shel</option>
            <option value="slate">Slate</option>
            <option value="solarized-dark">Solarized Dark</option>
        </optgroup>
    </select><br>
</div>
