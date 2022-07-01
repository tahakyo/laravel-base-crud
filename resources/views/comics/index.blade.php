@extends('layouts.app')

@section('main_content')
<h1>Comics List</h1>

<div class="container">
    <ul class="d-flex justify-content-between flex-wrap me-2">
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
                    <div>{{ $comic->title }}</div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection