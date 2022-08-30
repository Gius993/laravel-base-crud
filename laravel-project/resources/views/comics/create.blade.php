@extends('layouts.app')

@section('main_content')
	<h1>Aggiungi un eroe</h1>
	
		<form action="{{route('comics.store')}}" method="post">
			@csrf
			<div>
				<label for="title">titolo</label>
				<input type="text" id="title" name="title">
			</div>
			<div>
				<label for="thumb">url imagine</label>
				<input type="text" id="thumb" name="thumb">
				
			</div>
			<div>
				<h2>descrizione</h2>
				<textarea name="description" id="" cols="30" rows="10"></textarea>
			</div>
			
			<div>
				<label for="series">series</label>
				<input type="text" id="series" name="series">
			</div>
			<div>
				<label for="title">prezzo</label>
				<input type="text" id="price" name="price">
			</div>
			<button>Salva</button>
		</form>
	
@endsection