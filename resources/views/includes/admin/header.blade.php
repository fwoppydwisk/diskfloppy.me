    <nav>
        <div>
            <a href="/">public home</a> |
            <a href="/admin">admin home</a> |
            <a href="/admin/guestbook">guestbook</a>
            @if (auth()->check())
                | ({{ auth()->user()->name }}) <a href="/logout">logout</a>
            @else
                | <a href="/login">login</a>
            @endif
        </div>
    </nav>
