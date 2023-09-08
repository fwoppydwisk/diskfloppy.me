@extends('layouts.default')
@section('title', 'Guestbook')
@section('content')
    @php
        $db_alive = true;
        try {
            DB::connection()->getPdo();
        } catch (Exception $e) {
            $db_alive = false;
        }
    @endphp
    @if (!$db_alive)
        @include('components.errors.db-error')
    @else
    <br>
    <table class="gb-entry-form-container">
        <tr>
            <td>
                <form method="POST" action="/guestbook">
                    @csrf
                    <x-honeypot/>
                    <table class="gb-entry-form">
                        <tr>
                            <td>
                                <label for="name"><strong>Name:</strong></label>
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
                <p>A few things to note:</p>
                <ul>
                    <li>You can submit an entry <u>once every hour</u>.</li>
                    <li>Your IP address is logged but <u>not</u> publicly displayed.</li>
                    <li>Any entries that appear to be spam <u>will</u> be removed.</li>
                </ul>
            </td>
        </tr>
    </table>


    <hr>
    @php
        $entries = DB::select('
            SELECT name, timestamp, message
            FROM guestbook__entries
            ORDER BY id DESC
        ');
    @endphp
    <h1>Entries <small>({{ count($entries) }} total)</small></h1>
    @foreach ($entries as $entry)
        <table class="gb-entry">
            <tr>
                <td>
                    Submitted by <strong>{{ $entry->name }}</strong>
                    on <strong>{{ gmdate('H:i:s - Y-m-d', $entry->timestamp) }}</strong>
                    <hr>
                    {{ $entry->message }}
                </td>
            </tr>
        </table>
        <br>
    @endforeach
    @endif
@stop
