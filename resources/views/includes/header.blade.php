    <nav>
        <div>
            <!--<a href="/">home</a> |
 <a href="//git.diskfloppy.me/">cgit</a> |
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
            -->
            <h1>diskfloppy.me | <strong>@yield('title')</strong></h1>
            <a href="/" title="Home"><img src="/images/icons/nav/home.png"></a>
            <a href="//git.diskfloppy.me/" title="cgit"><img src="/images/icons/nav/repo.png"></a>
            <a href="/bookmarks/" title="Bookmarks"><img src="/images/icons/nav/bookmarks.png"></a>
            <a href="/guestbook/" title="Guestbook"><img src="/images/icons/nav/guestbook.png"></a>
            <a href="/contact/" title="Contact"><img src="/images/icons/nav/mail.png"></a>
            <a href="/weather/" title="Weather"><img src="/images/icons/nav/weather.png"></a>
            <a href="/music/" title="Music"><img src="/images/icons/nav/music.png"></a>&nbsp;&nbsp;
            <a href="/login/" title="Log in"><img src="/images/icons/nav/login.png"></a>
        </div>
    </nav>
