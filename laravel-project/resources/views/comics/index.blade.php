@extends('layouts.app')

@section('main_content')
	@foreach ($comics as $comic)
	  <h1>{{$comic->title}}</h1>
		<p>{{$comic->description}}</p>
		
		<div>{{$comic->series}}</div>
		<div>{{$comic->sale_date}}</div>
		
		<h3>{{$comic->type}}</h3>
		<a href="{{route('comics.show', ['comic' => $comic->id])}}">Vedi prodotto</a>
	@endforeach
@endsection