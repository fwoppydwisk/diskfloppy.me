<p class="quote">
    @foreach($quote["lines"] as $line)
        <strong>{{ $line["character"] }}:</strong>
        {{-- Literally only one thing will trigger this lmao --}}
        @if($line["line"] == "*Rage squeals*")
            {{ $line["line"] }}
        @else
            "{{ $line["line"] }}"
        @endif<br>
    @endforeach
    <small>({{ $quote["attribution"] }})</small>
</p>
