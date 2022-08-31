@extends('layouts.app')

@section('main_content')
	@foreach ($comics as $comic)
	  <h1>{{$comic->title}}</h1>
		<p>{{$comic->description}}</p>
		
		<div>{{$comic->series}}</div>
		<div>{{$comic->sale_date}}</div>
		
		<h3>{{$comic->type}}</h3>
		<a href="{{route('comics.show', ['comic' => $comic->id])}}">Vedi prodotto</a>
		<a href="{{route('comics.edit', ['comic' => $comic->id])}}">Modifica eroe</a>
		<div>
			<form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="post">
				@csrf
				@method('DELETE')
				<input type="submit" value="Elimina" onclick="return confirm('sicuro di voler eliminare ?')">
			</form>
		</div>
	@endforeach
@endsection