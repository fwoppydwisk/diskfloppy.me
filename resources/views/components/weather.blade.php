@php
$api_root = app('config')->get('app')['api_root'];

function degreesToCompassDirection($degrees) {
    $cardinalDirections = [
        'N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE',
        'S', 'SSW', 'SW', 'WSW', 'W', 'WNW', 'NW', 'NNW', 'N'
    ];
    return $cardinalDirections[round($degrees*16/360)];
}

$data = json_decode(file_get_contents($api_root.'/weather'));
$updated = gmdate('H:i Y-m-d', $data->updated);
$data = $data->current;
@endphp

<h1>Local Weather <small>(Last Update: {{ $updated }})</small></h1>
        <b>Wind Speed:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->wind->speed }} mph<br>
        <b>Wind Direction:</b>&nbsp;{{ $data->wind->direction->degrees }}°, {{ $data->wind->direction->cardinal }}<br>
        <b>Temperature:</b>&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->temperature }}°C<br>
        <b>Rain Rate:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->rain_rate }} mm/hr<br>
        <b>Humidity:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->humidity }}%<br>
