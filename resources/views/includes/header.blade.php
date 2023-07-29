    <nav>
        <div>
            <h1>diskfloppy.me | <strong>@yield('title')</strong></h1>
            <a href="/" title="Home"><img src="/images/icons/nav/home.png" alt="Home"></a>
            <a href="//git.diskfloppy.me/" title="cgit"><img src="/images/icons/nav/repo.png" alt="cgit"></a>
            <a href="/bookmarks/" title="Bookmarks"><img src="/images/icons/nav/bookmarks.png" alt="Bookmarks"></a>
            <a href="/guestbook/" title="Guestbook"><img src="/images/icons/nav/guestbook.png" alt="Guestbook"></a>
            <!--<a href="/contact/" title="Contact"><img src="/images/icons/nav/mail.png" alt="Contact"></a>-->
            <a href="/weather/" title="Weather"><img src="/images/icons/nav/weather.png" alt="Weather"></a>
            <a href="/music/" title="Music"><img src="/images/icons/nav/music.png" alt="Music"></a>&nbsp;&nbsp;
            @if (auth()->check())
                <a href="/admin/">admin</a>
                ({{ auth()->user()->name }}) <a href="/logout">logout</a>
            @endif
        </div>
    </nav>
