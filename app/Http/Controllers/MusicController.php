<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class MusicController extends Controller
{
    public function getCurrentTrack()
    {
        // If it's already cached just return that
        if (Cache::has('current_track')) {
            return Cache::get('current_track');
        }

        $response = Http::withQueryParameters([
            'method' => 'user.getrecenttracks',
            'user' => Config::get('services.lastfm.user'),
            'format' => 'json',
            'nowplaying' => 'true',
            'api_key' => Config::get('services.lastfm.key')
        ])->get('https://ws.audioscrobbler.com/2.0/');
        $data = $response->json();
        error_log($response->body());
        $track_data = $data["recenttracks"]["track"][0];
        $current_track = [
            'title' => $track_data["name"],
            'artist' => $track_data["artist"]["#text"],
            'url' => $track_data["url"],
        ];
        Cache::put('current_track', $current_track, now()->addSeconds(15));
        return $current_track;
    }

    public function getTopTracks()
    {
        // If it's already cached just return that
        if (Cache::has('top_tracks')) {
            return Cache::get('top_tracks');
        }

        $response = Http::withQueryParameters([
            'method' => 'user.gettoptracks',
            'user' => Config::get('services.lastfm.user'),
            'format' => 'json',
            'period' => '1month',
            'limit' => 10,
            'api_key' => Config::get('services.lastfm.key')
        ])->get('https://ws.audioscrobbler.com/2.0/');
        $data = $response->json();
        $topTracks = [];
        foreach ($data["toptracks"]["track"] as $track) {
            $topTracks[] = [
                'title' => $track["name"],
                'artist' => $track["artist"]["name"],
                'url' => $track["url"],
                'plays' => $track["playcount"],
            ];
        }
        Cache::put('top_tracks', $topTracks, now()->addSeconds(15));
        return $topTracks;
    }
    public function show(): View
    {
        return view('music')
            ->with('current_track', $this->getCurrentTrack())
            ->with('top_tracks', $this->getTopTracks());
    }
}
