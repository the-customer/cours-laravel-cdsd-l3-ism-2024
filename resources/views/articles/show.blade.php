@extends("layouts.base")


@section("content")
    @if ($article == null)
        <h4 style="color:red">Erreur! verifier votre requete</h4>
    @else  
        <h1>Details de l'article {{ $article["id"] }}</h1>
        <h4>Titre :  {{ $article["titre"] }}</h4>
        <p>Description :  {{ $article["description"] }}</p>
        <p>Published :  {{ $article["published"] }}</p>
    @endif
@endsection