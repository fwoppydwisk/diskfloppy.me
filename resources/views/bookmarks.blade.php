<x-layout>
    <x-slot:title>Bookmarks</x-slot:title>
    @foreach($categories as $category)
        <div class="section">
            <h2>{{ $category->name }}</h2>
            @if($category->id == 1)
                <p><em>(These are shuffled every load)</em></p>
                @php
                    $sites = $category->sites->shuffle();
                @endphp
            @else
                @php
                    $sites = $category->sites;
                @endphp
            @endif
            <hr>
            <ul>
            @foreach($sites as $site)
                    <li><a href="{{ $site->url }}">{{ $site->name }}</a> - {{ $site->description }}</li>
            @endforeach
            </ul>
        </div>
    @endforeach
</x-layout>
