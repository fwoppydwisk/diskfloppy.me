@extends('layouts.default')
@section('title', 'Music')
@section('description', '')
@section('content')
    @php

        $cfg = app('config')->get('services')['lastfm'];
        $api_root = app('config')->get('app')['api_root'];

        $current_track = json_decode(file_get_contents($api_root . '/lastfm/current'));
        $toptracks = json_decode(file_get_contents($api_root . '/lastfm/top'));
        $count = 0;
    @endphp
    <table class="infotable">
        <tr>
            <td colspan="4">
                <h2>Last/Current Track:</h2>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <a href="{{ $current_track->url }}">{{ $current_track->name }} • {{ $current_track->artist }}</a><br>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <hr>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <h2>Top {{ $cfg['toptracks'] }} Tracks (Last 7 days)</h2>
            </td>
        </tr>
        <tr">
            <td style="text-align: right"><b>#</b></td>
            <td><b>Track</b></td>
            <td><b>Artist</b></td>
            <td><b>Plays</b></td>
        </tr>
        @foreach ($toptracks as $track)
            @php $count++ @endphp
            @if ($count >= $cfg['toptracks'])
                @break
            @endif
            <tr>
                <td style="text-align: right">{{ $count+1 }}</td>
                <td>{{ $track->name }}</td>
                <td>{{ $track->artist }}</td>
                <td>{{ $track->plays }}</td>
            </tr>
        @endforeach
    </table>
    <hr>
@stop
