@extends('layouts.plantillabase');

@section('content')
    <a href="articles/create" class="btn btn-primary">CREATE</a>
    
    <table class="table table-ligth table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Code</th>
                <th scope="col">Description</th>
                <th scope="col">Cant</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <td>{{ $article->id}}</td>
                <td>{{ $article->code}}</td>
                <td>{{ $article->description}}</td>
                <td>{{ $article->cant}}</td>
                <td>{{ $article->price}}</td>
                <td>
                    <a href="/articles/{{ $article->id}}/edit" class="btn btn-info">Edit</a>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>

    @endsection