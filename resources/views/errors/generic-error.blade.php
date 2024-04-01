<x-minimal>
    <x-slot:title>Error 401: Unauthorized User!</x-slot:title>
    <h1>{{ $error }}</h1>
    <hr>
    @if(isset($description))
        <p>{{ $description }}</p>
    @endif
</x-minimal>
