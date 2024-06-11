<x-layout>
    <x-slot:title>Admin | Import</x-slot:title>
    <div class="info-section">
        <h2>Imported data</h2>
        <hr>
        <ul>
        @foreach($tables as $name => $data)
            <li><strong>{{ ucwords(str_replace('__', ' ', $name)) }}:</strong> {{ $data['count'] }} record(s)</li>
        @endforeach
        </ul>
    </div>
</x-layout>
