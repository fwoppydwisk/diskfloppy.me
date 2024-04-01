<x-layout>
    <x-slot:title>Music</x-slot:title>
    <x-current-track :track="$current_track"/>
    <hr>
    <x-top-tracks :tracks="$top_tracks"/>
</x-layout>
