@extends('layouts.app')

@section('main_content')
<h1>Comics List</h1>

<div class="container">
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
                    <div>{{ $comic->title }}</div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection