<?php

$curl_current = curl_init();

curl_setopt_array($curl_current, [
  CURLOPT_URL => "http://weather.diskfloppy.me/weatherData.json",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 300,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
]);

$current_response = curl_exec($curl_current);
$err = curl_error($curl_current);

curl_close($curl_current);

$curl_current = curl_init();

curl_setopt_array($curl_current, [
  CURLOPT_URL => "http://weather.diskfloppy.me/got.txt",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 300,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
]);

$last_update = curl_exec($curl_current);
$err = curl_error($curl_current);

curl_close($curl_current);

if ($err) {
  die("cURL Error: " . $err);
}
$current_response = json_decode($current_response, true);
$weather_data = $current_response['data']['conditions'][0];
echo '<h1>Local Weather <small>(Last Update: '.rtrim($last_update).')</small></h1>';
$windDirDeg = $weather_data['wind_dir_last'];
$windDir = "";
// W I N D
if (349 <= $windDirDeg || $windDirDeg <= 11) { $windDir = "N"; }
else if (12 <= $windDirDeg && $windDirDeg <= 33) { $windDir = "NNE"; }
else if (34 <= $windDirDeg && $windDirDeg <= 56) { $windDir = "NE"; }
else if (57 <= $windDirDeg && $windDirDeg <= 78) { $windDir = "ENE"; }
else if (79 <= $windDirDeg && $windDirDeg <= 101) { $windDir = "E"; }
else if (102 <= $windDirDeg && $windDirDeg <= 123) { $windDir = "ESE"; }
else if (124 <= $windDirDeg && $windDirDeg <= 146) { $windDir = "SE"; }
else if (147 <= $windDirDeg && $windDirDeg <= 168) { $windDir = "SSE"; }
else if (169 <= $windDirDeg && $windDirDeg <= 191) { $windDir = "S"; }
else if (192 <= $windDirDeg && $windDirDeg <= 213) { $windDir = "SSW"; }
else if (214 <= $windDirDeg && $windDirDeg <= 236) { $windDir = "SW"; }
else if (237 <= $windDirDeg && $windDirDeg <= 258) { $windDir = "WSW"; }
else if (259 <= $windDirDeg && $windDirDeg <= 281) { $windDir = "W"; }
else if (282 <= $windDirDeg && $windDirDeg <= 303) { $windDir = "WNE"; }
else if (304 <= $windDirDeg && $windDirDeg <= 326) { $windDir = "NW"; }
else if (327 <= $windDirDeg && $windDirDeg <= 348) { $windDir = "WNW"; }


echo '<b>Wind Speed:</b> '.$weather_data['wind_speed_last'].' mph<br>';
echo '<b>Wind Direction:</b> '.$weather_data['wind_dir_last'].'°, '.$windDir.'<br>';
echo '<b>Temperature:</b> '.round(($weather_data['temp']-32)*(5/9), 1).'°C<br>';
echo '<b>Rain Rate:</b> '.round($weather_data['rain_rate_last']*0.2, 2).' mm/hr<br>';
echo '<b>Humidity:</b> '.$weather_data['hum'].'%<br>';
