@extends('layouts.base')

@section('content')
    <h1>Ajout de produit</h1>
    <br>
    <form class="form-signin row col-sm-4 m-auto" action="{{ route("articles.store") }}" method="POST">
        @csrf
        
        <div class="text-center mb-4">
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <div class="form-label-group my-2">
            <label for="titreInput">Titre</label>
            <input name="titre" type="text" id="titreInput" class="form-control" placeholder="Entrer le titre" autofocus>
        </div>

        <div class="form-label-group my-2">
            <label for="desxriptionInput">Description</label>
            <textarea rows="5" name="description" id="desxriptionInput" class="form-control" placeholder="Description de l'article"></textarea>
        </div>
    
        <div class="form-label-group my-2">
            <label for="imageInput">Image</label>
            <input name="image" type="text" id="imageInput" class="form-control" placeholder="Url de l'image">
        </div>
    
        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Mettre en ligne
        </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Enregistrer</button>
    </form>
@endsection