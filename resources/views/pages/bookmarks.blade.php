@extends('layouts.default')
@section('title', 'Bookmarks')
@section('description', 'This is the personal homepage of floppydisk.')
@section('content')
    @php
        $categories = DB::select('
        SELECT id, name
        FROM bookmark__categories
        ORDER BY priority ASC
    ');
    @endphp

    @foreach ($categories as $category)
        <table class="info-table">

            <caption>
                <h1>{{ $category->name }}</h1>
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
@stop
