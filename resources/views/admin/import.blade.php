<x-layout>
    <x-slot:title>Admin | Import</x-slot:title>
    <form class="import" action="{{ route('admin.import.submit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="data_file"><strong>File:</strong></label>
        <input class="file" type="file" name="data_file" accept=".json"><br>
        <h2>What to import:</h2>
        <input type="checkbox" name="guestbook__entries" checked>
        <label for="guestbook__entries">Guestbook Entries</label><br>
        <input type="checkbox" name="guestbook__bans" checked>
        <label for="guestbook__bans">Guestbook Bans</label><br>
        <input type="checkbox" name="guestbook__entries" checked>
        <label for="bookmark__categories">Bookmark Categories</label><br>
        <input type="checkbox" name="guestbook__entries" checked>
        <label for="bookmark_sites">Bookmark Sites</label><br>
        <button type="submit">Import</button>
    </form>
</x-layout>
