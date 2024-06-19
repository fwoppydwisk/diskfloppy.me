<nav>
    <h1>{{ str_replace("www.", "", Request::getHost()) }} | <strong>{{ $title }}</strong></h1>
    <div class="nav-wrapper">
        <div>
            <a href="/" title="Home"><img class="pixel" src="/images/icons/nav/home2.png" alt="Home" width="32" height="32"></a>
            <a href="//git.diskfloppy.me/" title="cgit"><img class="pixel" src="/images/icons/nav/repo.png" alt="cgit" width="32" height="32"></a>
            <a href="/pub/" title="Public Files"><img class="pixel" src="/images/icons/nav/pubfiles.png" alt="Public Files" width="32" height="32"></a>
            <a href="/computers/" title="Computers"><img class="pixel" src="/images/icons/nav/computers.png" alt="Computers" width="32" height="32"></a>
            <a href="/bookmarks/" title="Bookmarks"><img class="pixel" src="/images/icons/nav/bookmarks.png" alt="Bookmarks" width="32" height="32"></a>
            <a href="/guestbook/" title="Guestbook"><img class="pixel" src="/images/icons/nav/guestbook.png" alt="Guestbook" width="32" height="32"></a>
            <a href="//weather.diskfloppy.me/" title="Weather"><img class="pixel" src="/images/icons/nav/weather.png" alt="Weather" width="32" height="32"></a>
            <a href="/music/" title="Music"><img class="pixel" src="/images/icons/nav/music.png" alt="Music" width="32" height="32"></a>&nbsp;&nbsp;
        </div>
        <div>
            <a href="/login/" title="Admin Login"><img class="pixel" src="/images/icons/nav/admin.png" alt="Admin Login" width="32" height="32"></a>&nbsp;&nbsp;
        </div>
    </div>
</nav>
