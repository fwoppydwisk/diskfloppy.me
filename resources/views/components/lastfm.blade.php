<?php
$cfg = app('config')->get('services')['lastfm'];

$curl_current = curl_init();

curl_setopt_array($curl_current, [
  CURLOPT_URL => "https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=".$cfg['user']."&nowplaying=true&format=json&api_key=".$cfg['key'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
]);

$current_response = curl_exec($curl_current);
$err = curl_error($curl_current);

curl_close($curl_current);

if ($err) {
  die("cURL Error #:" . $err);
}
$current_response = json_decode($current_response, true);
$nowplaying = $current_response['recenttracks']['track'][0];


$tracks_to_show = 10;

$curl = curl_init();
curl_setopt_array($curl, [
  CURLOPT_URL => "https://ws.audioscrobbler.com/2.0/?method=user.gettoptracks&user=".$cfg['user']."&format=json&period=7day&api_key=".$cfg['key'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
]);

$toptracks = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  die("cURL Error #:" . $err);
}

$toptracks = json_decode($toptracks, true);
$tracks = $toptracks['toptracks']['track'];
$count = 0;
?>

<h1>Last.fm <small>(<a href="https://www.last.fm/user/{{ $cfg['user']}}">Profile</a>)</small></h1>
        <b>Last/Current Track:</b> <a href="{{ $nowplaying['url'] }}">{{ $nowplaying['name'] }} • {{ $nowplaying['artist']['#text'] }}</a>
        <h2>Top {{ $tracks_to_show }} Tracks (Last 7 days)</h2>
        <ol>
@foreach ($tracks as $track)
    @if ($count >= $tracks_to_show)
    </ol>
        @break
    @endif
        <li>
                <a href="{{ $track['url'] }}">{{ $track['name'] }} • {{ $track['artist']['name'] }}</a>
                <small>({{$track['playcount']}} plays)</small>
            </li>
<?php $count++ ?>
@endforeach
