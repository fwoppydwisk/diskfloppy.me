@php

$cfg = app('config')->get('services')['lastfm'];

$current_response = json_decode(file_get_contents("https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=".$cfg['user']."&nowplaying=true&format=json&api_key=".$cfg['key']));
$nowplaying = $current_response->recenttracks->track[0];
$toptracks = json_decode(file_get_contents("https://ws.audioscrobbler.com/2.0/?method=user.gettoptracks&user=".$cfg['user']."&format=json&period=7day&api_key=".$cfg['key']));
$tracks = $toptracks->toptracks->track;
$count = 0;
@endphp

<h1>Last.fm <small>(<a href="https://www.last.fm/user/{{ $cfg['user']}}">Profile</a>)</small></h1>
        <b>Last/Current Track:</b> <a href="{{ $nowplaying->url }}">{{ $nowplaying->name }} • {{ $nowplaying->artist->{"#text"} }}</a>
        <h2>Top {{ $cfg['toptracks'] }} Tracks (Last 7 days)</h2>
        <ol>
@foreach ($tracks as $track)
    @if ($count >= $cfg['toptracks'])
    </ol>
        @break
    @endif
        <li>
                <a href="{{ $track->url }}">{{ $track->name }} • {{ $track->artist->name }}</a>
                <small>({{ $track->playcount }} plays)</small>
            </li>
@php $count++ @endphp
@endforeach
