@extends("layouts.base")

@section("content")
   <h1>Les articles <a href="{{ route('articles.create') }}" class="btn btn-sm btn-success">+</a></h1>
   {{--
   @for ($i = 0; $i < count($articles); $i++)
      <h3>{{ $articles[$i]["titre"] }}</h3>
      <p>{{ $articles[$i]["description"] }}</p>
   @endfor
   --}}

   <table class="table table-striped">
      <thead>
         <tr>
            <th class="col">#</th>
            <th class="col">Titre</th>
            <th class="col">Desctiption</th>
            <th class="col">Publié</th>
            <th class="col">Actions</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($articles as $article)
            <tr>
               <td class="col">{{ $article->id }}</td>
               <td class="col">{{ $article->titre }}</td>
               <td class="col">{{ $article->description }}</td>
               <td class="col">
                  <span class="bg-{{ $article->etat == 1 ? 'success' : 'danger' }} p-1">{{ $article->etat == 1 ? "OUI" : "NON" }}</span>
               </td>
               <td class="col">
                  <a href="{{ route("articles.show",$article->id) }}" class="btn btn-sm btn-outline-info">Detail</a>
                  <a href="{{ route("articles.edit",$article->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                  <a href="{{ route("articles.delete",$article->id) }}" class="btn btn-sm btn-outline-danger">Delete</a>
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>
   
  

   {{-- @forelse ($articles as $article)
      <h3>{{ $article["titre"] }}</h3>
      <p>{{ $article["description"] }}</p>
      <small>{{ $article["published"] }}</small>
   @empty
      <h5 style="color:red">Pas d'articles</h5>
   @endforelse --}}
@endsection