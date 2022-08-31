@extends('layouts.app')

@section('main_content')
	<h1>Aggiungi un eroe</h1>
	@if ($errors->any())
    	<div class="alert alert-danger">
       		 <ul>
          	 	 @foreach ($errors->all() as $error)
               		 <li>{{ $error }}</li>
           		 @endforeach
       		 </ul>
   		 </div>
	@endif
	
		<form action="{{route('comics.store')}}" method="post">
			@csrf
			
			<div>
				<label for="title">titolo</label>
				<input type="text" id="title" name="title" value="{{old('title')}}">
			</div>
			<div>
				<label for="thumb">url imagine</label>
				<input type="text" id="thumb" name="thumb" value="{{old('thumb')}}">
				
			</div>
			<div>
				<h2>descrizione</h2>
				<textarea name="description" id="" cols="30" rows="10">{{old('description')}}</textarea>
			</div>
			
			<div>
				<label for="series">series</label>
				<input type="text" id="series" name="series" value="{{old('series')}}">
			</div>
			<div>
				<label for="price">prezzo</label>
				<input type="text" id="price" name="price" value="{{old('price')}}">
			</div>
			<div>
				<label for="sale_date">data</label>
				<input type="text" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
			</div>
			<div>
				<label for="type">tipo</label>
				<input type="text" id="type" name="type" value="{{old('type')}}">
			</div>
			<button>Salva</button>
		</form>
	
@endsection