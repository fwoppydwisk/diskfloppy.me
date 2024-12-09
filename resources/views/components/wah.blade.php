<div class="wah">
    <h3>Random Wah!</h3>
    @if ($wah !== "")
        <img src="{{ $wah }}" alt="Random image featuring a Red Panda">
        <p>Image "stolen" from <a href="https://tinyfox.dev/">tinyfox.dev</a></p>
    @else
        <img src="https://placehold.co/250x250" alt="250x250 Placeholder Image">
        <p>Unable to retrieve image</p>
    @endif
</div>
