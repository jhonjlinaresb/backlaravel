@extends('layouts.plantillabase');

@section('content')

    <h3>Create Article</h3>
    <form action="/articles" method="POST">

        <div class="mb-3">
            <label for="" class="form-label">Code</label>
            <input id="code" name="code" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <input id="description" name="description" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cant</label>
            <input id="cant" name="cant" type="text" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input id="price" name="price" type="number" step="any" value="0.00" class="form-control" tabindex="4">
        </div>

    </form>

@endsection