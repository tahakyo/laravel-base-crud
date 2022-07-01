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
    </div>
@endsection
