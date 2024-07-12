<x-layout>
    <x-slot:title>Bookmarks</x-slot:title>
    @foreach($categories as $category)
        <div class="info-section">
            <h2>{{ $category->name }}</h2>
            <hr>
            <ul>
            @foreach($category->sites as $site)
                    <li><a href="{{ $site->url }}">{{ $site->name }}</a> - {{ $site->description }}</li>
            @endforeach
            </ul>
        </div>
    @endforeach
</x-layout>
