<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class MusicController extends Controller
{
    public function getCurrentTrack() {
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
        // $image = array_column($track_data["image"], null, 'size')['large'] ?? false;
        $image = $track_data["image"][(array_key_last($track_data["image"]))] ?? false;
        $now_playing = false;
        if (array_key_exists("@attr", $track_data)) {
            $now_playing = $track_data["@attr"]["nowplaying"] == "true" ?? ["url"=>null];
        }
        $current_track = [
            'title' => $track_data["name"],
            'artist' => $track_data["artist"]["#text"],
            'url' => $track_data["url"],
            'image' => $image["#text"],
            'header' => $now_playing ? "Now Playing" : "Last Track",
        ];
        Cache::put('current_track', $current_track, now()->addSeconds(15));
        return $current_track;
    }

    public function getTopTracks() {
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
    public function show() : View {
        return view('music')
            ->with('current_track', $this->getCurrentTrack())
            ->with('top_tracks', $this->getTopTracks());
    }
}
