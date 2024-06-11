<x-layout>
    <x-slot:title>Bookmarks</x-slot:title>
    @foreach($categories as $category)
        <table class="info-table" role="presentation">
            <caption>
                <h2>{{ $category->name }}</h2>
                <hr>
            </caption>
            <tbody>
            @foreach($category->sites as $site)
                <tr>
                    <td><a href="{{ $site->url }}">{{ $site->name }}</a> - {{ $site->description }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endforeach
</x-layout>
