<div class="current-track">
    <div>
        <img src="{{ $track["image"] }}" alt="Album cover for {{ $track["title"] }} by {{ $track["artist"] }}">
    </div>
    <div>
        <h2>Last/Current Track:</h2>
        <a href="{{ $track["url"] }}">{{ $track["title"] }} • {{ $track["artist"] }}</a><br>
    </div>
</div>
