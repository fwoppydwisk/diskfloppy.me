@extends('layouts.default')
@section('title', 'Weather')
@section('description', 'Data from my weather station')
@section('content')
@php
$api_root = app('config')->get('app')['api_root'];

function degreesToCompassDirection($degrees) {
    $cardinalDirections = [
        'N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE',
        'S', 'SSW', 'SW', 'WSW', 'W', 'WNW', 'NW', 'NNW', 'N'
    ];
    return $cardinalDirections[round($degrees*16/360)];
}

$api_alive = true;

try {
    $data = file_get_contents($api_root.'/weather');
} catch (Exception $e) {
    $api_alive = false;
}
@endphp
@if (!$api_alive)
    @include('components.errors.api-error')
@else
    @php
        $data = json_decode(file_get_contents($api_root.'/weather'));
        $updated = gmdate('H:i Y-m-d', $data->updated);
        $data = $data->current;
    @endphp
<table class="info-table" role="presentation">
    <caption>
        <h2>Local Weather</h2>
        <hr>
    </caption>
    <tr>
        <td><b>Wind Speed:</b></td>
        <td>{{ $data->wind->speed }} mph</td>
    </tr>
    <tr>
        <td><b>Wind Direction:</b></td>
        <td>{{ $data->wind->direction->degrees }}°, {{ $data->wind->direction->cardinal }}</td>
    </tr>
    <tr>
        <td><b>Temperature:</b></td>
        <td>{{ $data->temperature }}°C</td>
    </tr>
    <tr>
        <td><b>Rain Rate:</b></td>
        <td>{{ $data->rain_rate }} mm/hr</td>
    </tr>
    <tr>
        <td><b>Humidity:</b></td>
        <td>{{ $data->humidity }}%</td>
    </tr>
</table>
<br>
<small><i>(Last Update: {{ $updated }})</i></small>
@endif
@stop
