<x-layout>
    <x-slot:title>Music</x-slot:title>
    <x-current-track :track="$current_track"/>
    <x-top-tracks :tracks="$top_tracks"/>
</x-layout>
