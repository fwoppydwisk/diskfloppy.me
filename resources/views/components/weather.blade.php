@php
    function degreesToCompassDirection($degrees) {
        $cardinalDirections = [
            'N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE',
            'S', 'SSW', 'SW', 'WSW', 'W', 'WNW', 'NW', 'NNW', 'N'
        ];
        return $cardinalDirections[round($degrees*16/360)];
    }

    $data = json_decode(file_get_contents('http://weather.diskfloppy.me/data/weatherData.json'));
    $updated = gmdate('H:i Y-m-d', intval(rtrim(file_get_contents('http://weather.diskfloppy.me/data/got.txt'))));
    $data = $data->data->conditions[0];
@endphp

<h1>Local Weather <small>(Last Update: {{ $updated }})</small></h1>
        <b>Wind Speed:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->wind_speed_last }} mph<br>
        <b>Wind Direction:</b>&nbsp;{{ $data->wind_dir_last }}°, {{ degreesToCompassDirection($data->wind_dir_last) }}<br>
        <b>Temperature:</b>&nbsp;&nbsp;&nbsp;&nbsp;{{ round(($data->temp-32)*(5/9), 1) }}°C<br>
        <b>Rain Rate:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ round($data->rain_rate_last*0.2, 2) }} mm/hr<br>
        <b>Humidity:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ round($data->hum) }}%<br>
