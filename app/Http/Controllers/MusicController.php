<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class MusicController extends Controller
{
    public function getCurrentTrack() {
        if (Cache::has('current_track')) {
            return Cache::get('current_track');
        }
        $response = Http::get('https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user='.env('LASTFM_USER').'&nowplaying=true&format=json&api_key='.env('LASTFM_KEY'));
        $data = $response->json();
        $track_data = $data["recenttracks"]["track"][0];
        $current_track = [
            'title' => $track_data["name"],
            'artist' => $track_data["artist"]["#text"],
            'url' => $track_data["url"],
        ];
        Cache::put('current_track', $current_track, now()->addSeconds(15));
        return $current_track;
    }

    public function getTopTracks() {
        if (Cache::has('top_tracks')) {
            return Cache::get('top_tracks');
        }
        $response = Http::get('https://ws.audioscrobbler.com/2.0/?method=user.gettoptracks&user='.env('LASTFM_USER').'&format=json&period=1month&limit=10&api_key='.env('LASTFM_KEY'));
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
