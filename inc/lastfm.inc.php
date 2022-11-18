<h1>Last.fm <small><a href="https://www.last.fm/user/floppydisk_">Profile</a></small></h1>
<?php
require('inc/config.inc.php');

$curl_current = curl_init();

curl_setopt_array($curl_current, [
  CURLOPT_URL => "https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=".CONF['lastfm_user']."&nowplaying=true&format=json&api_key=".CONF['lastfm_key'],
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

echo '        <b>Last/Current Track:</b> <a href="'.$nowplaying['url'].'">'.$nowplaying['name'].' • '.$nowplaying['artist']['#text'].'</a>'.PHP_EOL;

$tracks_to_show = 10;

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://ws.audioscrobbler.com/2.0/?method=user.gettoptracks&user=".CONF['lastfm_user']."&format=json&period=7day&api_key=".CONF['lastfm_key'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
]);

$toptracks_response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  die("cURL Error #:" . $err);
}
echo '        <h2>Top '.$tracks_to_show.' Tracks (Last 7 days)</h2>'.PHP_EOL;
echo '        <ol>'.PHP_EOL;
$toptracks_response = json_decode($toptracks_response, true);
$tracks = $toptracks_response['toptracks']['track'];
$count = 0;
foreach ($tracks as $track) {
  echo '            <li>'.PHP_EOL;
  echo '              <a href="'.$track['url'].'">'.$track['name'].' • '.$track['artist']['name'].'</a>'.PHP_EOL;
  echo '              <small>('.$track['playcount'].' plays)</small>'.PHP_EOL;
  echo '            </li>'.PHP_EOL;
  if ($count >= $tracks_to_show - 1) break;
  $count++;
}
echo '        </ol>';