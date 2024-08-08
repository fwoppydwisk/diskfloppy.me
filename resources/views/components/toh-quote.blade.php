<p class="quote">
    @foreach($quote["lines"] as $line)
        <strong>{{ $line["character"] }}:</strong> "{{ $line["line"] }}"<br>
    @endforeach
    <small>({{ $quote["attribution"] }})</small>
</p>
