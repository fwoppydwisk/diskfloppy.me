@php
    function degreesToCompassDirection($degrees) {
        $cardinalDirections = array('N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE', 'S', 'SSW', 'SW', 'WSW', 'W', 'WNW', 'NW', 'NNW', 'N');
        $degreesPerDirection = 360 / count($cardinalDirections);
        $index = round($degrees / $degreesPerDirection);
        return $cardinalDirections[$index];
    }

    $data = json_decode(file_get_contents('http://weather.diskfloppy.me/data/weatherData.json'));
    $updated = gmdate('H:i Y-m-d', intval(rtrim(file_get_contents('http://weather.diskfloppy.me/data/got.txt'))));
    $data = $data->data->conditions[0];
@endphp

<h1>Local Weather <small>(Last Update: {{ $updated }})</small></h1>
        <b>Wind Speed:</b> {{ $data->wind_speed_last }} mph<br>
        <b>Wind Direction:</b> {{ $data->wind_dir_last }}°, {{ degreesToCompassDirection($data->wind_dir_last) }}<br>
        <b>Temperature:</b> {{ round(($data->temp-32)*(5/9), 1) }}°C<br>
        <b>Rain Rate:</b> {{ round($data->rain_rate_last*0.2, 2) }} mm/hr<br>
        <b>Humidity:</b> {{ round($data->hum) }}%<br>
