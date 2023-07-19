@extends('layouts.default')
@section('title', 'guestbook')
@section('content')
    <br/>
    <form method="POST" action="/guestbook">
        @csrf
        <x-honeypot />
        <table class="gb_entryform">
            <tr>
                <td>
                    <label for="name">Name:</label>
                </td>
                <td>
                    <input name="name" type="text" id="name" placeholder="John Doe">
                </td>
                <td>
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="message">Message:</label>
                </td>
                <td>
                    <textarea name="message" id="message" rows="3"></textarea>
                </td>
                <td>
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
    <p>A few things to note:</p>
    <ul>
        <li>You can submit an entry <u>once every hour</u>.</li>
        <li>Your IP address <u>will</u> be logged but <u>will not</u> be publically displayed.</li>
        <li>Any entries that appear to be spam <u>will</u> be removed.</li>
    </ul>
    <hr/>
    @php
        $entries = DB::select('
            SELECT name, timestamp, message
            FROM guestbook__entries
            ORDER BY id DES
        ');
    @endphp
    <h1>Entries <small>({{ count($entries) }} total)</small></h1>
    @foreach ($entries as $entry)
        <table class="gb_entry"><tr><td>
            Name:&nbsp;{{ $entry->name }}<br/>
            Date:&nbsp;{{ gmdate("H:i:s - Y-m-d", $entry->timestamp) }}<br/><br/>
            {{ $entry->message }}
        </td></tr></table>
    @endforeach
@stop

