@extends('layouts.app')

@section('main_content')
	<h1>modifica eroe</h1>
	@if ($errors->any())
	<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
@endif
	<form 
		action="{{ route('comics.update', ['comic' => $comics->id]) }}" 
		method="post">
		@csrf
		@method('PUT')
		<div>
			<label for="title">titolo</label>
			<input type="text" id="title" name="title" value="{{ $comics->title}}">
		</div>
		<div>
			<label for="thumb">url imagine</label>
			<input type="text" id="thumb" name="thumb" value="{{ $comics->thumb}}">
			
		</div>
		<div>
			<h2>descrizione</h2>
			<textarea name="description" id="" cols="30" rows="10">{{ $comics->description}}</textarea>
		</div>
		
		<div>
			<label for="series">series</label>
			<input type="text" id="series" name="series" value="{{ $comics->series}}">
		</div>
		<div>
			<label for="price">prezzo</label>
			<input type="text" id="price" name="price" value="{{ $comics->price}}">
		</div>
		<div>
			<label for="sale_date">data</label>
			<input type="text" id="sale_date" name="sale_date" value="{{ $comics->sale_date}}">
		</div>
		<div>
			<label for="type">tipo</label>
			<input type="text" id="type" name="type" value="{{ $comics->type}}">
		</div>
		<input type="submit">
	</form>
	
@endsection