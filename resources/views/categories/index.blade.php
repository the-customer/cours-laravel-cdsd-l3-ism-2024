@extends('layouts.base')


@section('content')
    <h3>Les categories</h3>
    <ul>
        @foreach ($categories as $categorie)
            <li>
                <a href="{{ route('categories.show',$categorie->id) }}">{{ $categorie->libelle }}</a>
            </li>
        @endforeach
    </ul>
@endsection