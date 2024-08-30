@if($status == null)
    <p>Status Unavailable</p>
@else
    <span>I'm</span>
    <h2 class="online-status" style="color: {{ $status["color"] }};text-shadow: var(--firefox-shadow) {{ $status["color"] }}4f !important">{{ $status["text"] }}!</h2>
@endif
<p><strong>Time in Britain:</strong> <span id="clock"></span></p>
