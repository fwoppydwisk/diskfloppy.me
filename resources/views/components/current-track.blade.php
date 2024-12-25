<div class="current-track">
    <div>
        <img src="{{ $track["image"] }}" alt="Album cover for {{ $track["title"] }} by {{ $track["artist"] }}">
    </div>
    <div>
        <h2>{{ $track["header"] }}:</h2>
        <a href="{{ $track["url"] }}">{{ $track["title"] }}</a><br>
        by {{ $track["artist"] }}<br>
    </div>
</div>
