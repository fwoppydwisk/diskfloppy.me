<x-minimal>
    <x-slot:title>Error 403: IP Blocked!</x-slot:title>
    <h1>Error 403: IP Blocked!</h1>
    <hr>
    <p>Your IP has been banned from submitting to the guestbook.</p>
    @if (isset($reason))
        <p><b>Reason:</b> {{ $reason }}</p>
    @endif
    <br>
    Click <a href="/guestbook">here</a> to go back to the guestbook.
</x-minimal>
