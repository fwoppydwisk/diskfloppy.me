<x-layout>
    <x-slot:title>Guestbook</x-slot:title>
    <table class="gb-entry-form-container" role="presentation">
        <tr>
            <td>
                <form method="POST" action="/guestbook">
                    @csrf
                    <x-honeypot/>
                    <table class="form" role="presentation">
                        <tr>
                            <td>
                                <label for="name"><strong>Name:</strong></label>
                            </td>
                            <td>
                                <input name="name" type="text" id="name">
                            </td>
                            <td>
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="message"><strong>Message:</strong></label>
                            </td>
                            <td>
                                <textarea name="message" id="message" rows="3"></textarea>
                            </td>
                            <td>
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit">Submit</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
            <td>
                <p><i>A few things to note:</i></p>
                <ul>
                    <li>You can submit an entry <u>once every hour</u>.</li>
                    <li>Your IP address is logged but <u>not</u> publicly displayed.</li>
                    <li>Any entries that appear to be spam <u>will</u> be removed.</li>
                </ul>
            </td>
        </tr>
    </table>


    <hr>
    <h2>Entries <small>({{ count($entries) }} total)</small></h2>
    @foreach ($entries as $entry)
        @php
            $user_agent = $parser->parse($entry->agent);
        @endphp
        <div class="gb-entry">
            Submitted by <strong>{{ $entry->name }}</strong>
            on <strong>{{ $entry->created_at->format('Y-m-d') }}</strong>
            at <strong>{{ $entry->created_at->format('h:i:s A (e)') }}</strong>
            <hr>
            <span class="guestbook-message">{{ $entry->message }}</span>
            <hr>
            @if($entry->agent === "Agent Unavailable")
                <address>Agent unavailable</address>
            @else
                <address>Posted using <strong>{{ $user_agent->ua->toString() }}</strong>
                    on <strong>{{ $user_agent->os->toString() }}</strong></address>
            @endif
        </div>
        <br>
    @endforeach
</x-layout>
