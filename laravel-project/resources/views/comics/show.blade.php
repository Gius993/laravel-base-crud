@extends('layouts.app')

@section('main_content')
	
	  <h1>{{$comics->title}}</h1>
		<p>{{$comics->description}}</p>
		<div>
			<img src="{{ $comics->thumb }}" alt="{{$comics->title}}">
			<strong>{{$comics->price}}</strong>			
		</div>
		
		<div>{{$comics->sale_date}}</div>
		
		<h3>{{$comics->type}}</h3>

@endsection