@extends('layouts.default-admin')
@section('title', 'Guestbook')
@section('content')
    @php
        $entries = DB::select('
            SELECT id, name, timestamp, message, ip_address
            FROM guestbook__entries
            ORDER BY id DESC
        ');
    @endphp
    <h1>Entries <small>({{ count($entries) }} total)</small></h1>
    @foreach ($entries as $entry)
        <table class="gb-admin">
            <tr>
                <td>
                    Name:&nbsp;{{ $entry->name }}<br>
                    IP:&nbsp;&nbsp;&nbsp;{{ $entry->ip_address }}<br>
                    Date:&nbsp;{{ gmdate("H:i:s - Y-m-d", $entry->timestamp) }}
                </td>
                <td class="gb-del">
                    <a href="/admin/guestbook/delete?id={{ $entry->id }}">del</a>
                </td>
            </tr>
            <tr>
                <td class="gb-message">
                    <br>
                    {{ htmlspecialchars($entry->message) }}
                </td>
            </tr></table>
    @endforeach
@stop

