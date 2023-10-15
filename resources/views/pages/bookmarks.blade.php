@extends('layouts.default')
@section('title', 'Bookmarks')
@section('description', 'This is the personal homepage of floppydisk.')
@section('content')
    @php
        $db_alive = true;
        try {
            DB::connection()->getPdo();
        } catch (Exception $e) {
            $db_alive = false;
        }
    @endphp
    @if (!$db_alive)
        @include('components.errors.db-error')
    @else
    @php
    $categories = DB::select('
        SELECT id, name
        FROM bookmark__categories
        ORDER BY priority ASC
    ');
    @endphp

    @foreach ($categories as $category)
        <table class="info-table" role="presentation">

            <caption>
                <h2>{{ $category->name }}</h2>
                <hr>
            </caption>

            @php
                $sites = DB::select(
                    '
            SELECT name, url, description
            FROM bookmark__sites
            WHERE category_id = ? ORDER BY priority ASC
        ',
                    [$category->id],
                );
            @endphp
            @foreach ($sites as $site)
                <tr>
                    <td><a href="{{ $site->url }}">{{ $site->name }}</a>
                        - {{ $site->description }}</td>
                </tr>
            @endforeach
        </table>
        <br>
    @endforeach
    @endif
@stop
