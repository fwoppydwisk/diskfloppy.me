@extends('layouts.minimal')
@section('title', 'Delete confirm')
@section('content')
    <h1>Delete Confirmation</h1>
    <hr/>
    <p>Are you sure you want to delete this entry?</p>

    <h3>Entry Details:</h3>
    <table class="gb_entry_details">
        <tr>
            <td><b>ID:</b></td>
            <td>{{ $entry->id }}</td>
        </tr>
        <tr>
            <td><b>Name:</b></td>
            <td>{{ $entry->name }}</td>
        </tr>
        <tr>
            <td><b>Date:</b></td>
            <td>{{ gmdate("H:i:s - Y-m-d", $entry->timestamp) }}</td>
        </tr>
        <tr>
            <td><b>Message:</b></td>
            <td>{{ $entry->message }}</td>
        </tr>
    </table>

    <form action="/admin/guestbook/delete" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $entry->id }}">
        <button type="submit">Confirm Delete</button>
    </form>
@stop
