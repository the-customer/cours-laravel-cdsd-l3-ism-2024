@extends('layouts.base')


@section('content')
<h3 class="mb-5">Articles : <code>{{ $categorie->libelle }}</code></h3>
<div class="row gap-2">
  @foreach ($articles as $article)
    <div class="card col-sm-4">
          <img class="card-img-top" src="{{ $article->image }}" alt="{{ $article->titre }}">
          <div class="card-body">
            <h5 class="card-title">{{ $article->titre }}</h5>
            <p class="card-text">{{ $article->description }}</p>
            <a href="#" class="btn btn-primary">Details</a>
          </div>
        </div> 
  @endforeach
</div>
@endsection