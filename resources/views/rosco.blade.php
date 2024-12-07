<x-layout>
    <x-slot:title>Rosco</x-slot:title>
    <div class="rosco-gallery">
        @foreach($images as $image)
            <div class="rosco">
                <img src="{{ $image["path"] }}" @if(isset($image["description"])) alt="{{ $image["description"] }}" @endif>
                @if(isset($image["description"]))
                    <p>{{$image["description"]}}</p>
                @endif
            </div>
        @endforeach
    </div>
</x-layout>
