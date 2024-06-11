<x-layout>
    <x-slot:title>Admin | Guestbook</x-slot:title>
    <div class="info-section">
        <h2>Statistics</h2>
        <hr>
        <strong>Unique IP addresses:</strong> {{ $guestbook_unique_addr }}<br>
        <strong>Entries:</strong> {{ $guestbook_entry_count }}
    </div>
    <br>
    <div class="info-section">
        <h2>Entries</h2>
        <hr>
        <table class="info-admin fullwidth">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>IP Address</th>
                <th>Message</th>
                <th class="blank"></th>
            </tr>
            @foreach ($entries as $entry)
                <tr>
                    <td>{{ $entry->id }}</td>
                    <td>{{ $entry->name }}</td>
                    <td>{{ $entry->ip }}</td>
                    <td>{{ $entry->message }}</td>
                    <td><a href="?action=delete&id={{ $entry->id }}"><button>Delete</button></a></td>
                </tr>
            @endforeach
        </table>
    </div>
</x-layout>
