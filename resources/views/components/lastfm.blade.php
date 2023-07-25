@php

$cfg = app('config')->get('services')['lastfm'];
$api_root = app('config')->get('app')['api_root'];

$current_track = json_decode(file_get_contents($api_root.'/lastfm/current'));
$toptracks = json_decode(file_get_contents($api_root.'/lastfm/top'));
$count = 0;
@endphp

<h1>Last.fm <small>(<a href="https://www.last.fm/user/{{ $cfg['user']}}">Profile</a>)</small></h1>
        <b>Last/Current Track:</b> <a href="{{ $current_track->url }}">{{ $current_track->name }} • {{ $current_track->artist }}</a>
        <h2>Top {{ $cfg['toptracks'] }} Tracks (Last 7 days)</h2>
@foreach ($toptracks as $track)
    @if ($count >= $cfg['toptracks'])
        @break
    @endif
    {{ str_pad($count+1, 2, '0', STR_PAD_LEFT) }}] <a href="{{ $track->url }}">{{ $track->name }} • {{ $track->artist }}</a>
            <small>({{ $track->plays }} plays)</small><br>
@php $count++ @endphp
@endforeach
