@extends('layouts.plantillabase')

@section('content')

    <h2>Edit Articles</h2>
    <form action="/articles/{{$article->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Code</label>
            <input id="code" name="code" type="text" class="form-control" value="{{ $article->code}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <input id="description" name="description" type="text" class="form-control" value="{{ $article->description}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cant</label>
            <input id="cant" name="cant" type="text" class="form-control" value="{{ $article->cant}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input id="price" name="price" type="number" step="any" value="0.00" class="form-control" value="{{ $article->price}}">
        </div>
        <a href="/articles" class="btn btn-secondary" tabindex="5">Cancell</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Save</button>

    </form>
    
@endsection