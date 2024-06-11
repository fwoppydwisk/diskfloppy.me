<x-layout>
    <x-slot:title>Admin | Bookmarks</x-slot:title>
    @foreach($categories as $category)
        <div class="info-section info-admin-section">
            <h2>{{ $category->name }}</h2>
            <table class="info-admin">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>URL</th>
                    <th>Priority</th>
                    <th class="blank"></th>
                </tr>
                @foreach($category->sites as $site)
                    <tr>
                        <td>{{ $site->id }}</td>
                        <td>{{ $site->name }}</td>
                        <td>{{ $site->description }}</td>
                        <td>{{ $site->url }}</td>
                        <td>{{ $site->priority }}</td>
                        <td><a href="?action=delete&id={{ $site->id }}"><button>Delete</button></a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endforeach
</x-layout>
