@extends('layouts.app')

@section('main_content')
    <h1>Edit comic</h1>
    <div class="container">
      <form action="{{ route('comics.update', ['comic'=>$comics_edit->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-auto mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comics_edit->title }}">
        </div>
        <div class="col-auto mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $comics_edit->description }}">
        </div>
        <div class="col-auto mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comics_edit->thumb }}">
        </div>
        <div class="col-auto mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $comics_edit->price }}">
        </div>
        <div class="col-auto mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comics_edit->series }}">
        </div>
        <div class="col-auto mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comics_edit->sale_date }}">
        </div>
        <div class="col-auto mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comics_edit->type }}">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
@endsection