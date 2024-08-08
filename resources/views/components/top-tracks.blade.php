<div class="section">
<table class="music-top10">
    <caption>
        <h2 style="margin-bottom: 5px">Top 10 Tracks (Last 30 days):</h2>
    </caption>
    <tr>
        <th><b>#</b></th>
        <th><b>Track</b></th>
        <th><b>Artist</b></th>
        <th><b>Plays</b></th>
    </tr>
    @php($count = 0)
    @foreach ($tracks as $track)
        @php($count++)
        <x-track :track="$track" :count="$count"/>
    @endforeach
</table>
</div>
