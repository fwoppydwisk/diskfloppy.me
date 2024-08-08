<p><strong>Weather Conditions:</strong></p>
<hr style="margin: 4px 0">
<p><strong>Temperature:</strong> {{ round(($conditions[0]["temp"] - 32) * (5/9), 1) }} degC</p>
<p><strong>Rain:</strong> {{ ($conditions[0]["rain_rate_last"] * 0.2) }}mm/hr ({{ $conditions[0]["rainfall_daily"] }}mm today)</p>
@if ($conditions[0]["wind_speed_last"] != 0)
    <p><strong>Wind:</strong> {{ round($conditions[0]["wind_speed_last"], 1) }}mph ({{ $conditions[0]["wind_dir_last"] }} deg)</p>
@else
    <p><strong>Wind:</strong> 0mph</p>
@endif
<p><strong>Humidity:</strong> {{ round($conditions[0]["hum"], 1) }}%</p>
<p><strong>Pressure:</strong> {{ round($conditions[2]["bar_sea_level"], 1) }} inHg</p>
