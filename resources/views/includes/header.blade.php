    <nav>
        <div>
            <a href="/">home</a> |
	        <a href="//git.diskfloppy.me/">cgit</a> |
            <a href="//wiki.diskfloppy.me/">wiki</a> |
            <a href="/projects/">projects</a> |
            <a href="/calculators/">calculators</a> |
            <a href="/computers/">computers</a> |
            <a href="/bookmarks/">bookmarks</a> |
            <a href="/guestbook/">guestbook</a>
            @if (auth()->check())
                | <a href="/admin/">admin</a>
                | ({{ auth()->user()->name }}) <a href="/logout">logout</a>
            @else
                | <a href="/login">login</a>
            @endif
        </div>
    </nav>
