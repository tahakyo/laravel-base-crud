@extends('layouts.app')

@section('main_content')
    <h1>Comic Details</h1>
    <div class="container text-center">
        <img src="{{ $selected_comic->thumb }}" alt="">
        <div class="fw-bold">Title:</div>
        <p>{{ $selected_comic->title }}</p>
        <div class="fw-bold">Description:</div>
        <p>{{ $selected_comic->description }}</p>
        <div class="fw-bold">Type:</div>
        <div>{{ $selected_comic->type }}</div>
        <div class="fw-bold">Series:</div>
        <div>{{ $selected_comic->series }}</div>
        <div class="fw-bold">Sale Date:</div>
        <div>{{ $selected_comic->sale_date }}</div>
        <div class="fw-bold">Price: {{ $selected_comic->price }}$</div>
        <div>
            <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $selected_comic->id]) }}">Edit</a>
            <form action="{{ route('comics.destroy', ['comic'=> $selected_comic->id]) }}" method="POST">
              @csrf
              @method('DELETE')
                <button class="btn btn-danger" onclick="return confirm('Do you really want to delete this comic')">Delete</button>
            </form>
        </div>
    </div>
@endsection
