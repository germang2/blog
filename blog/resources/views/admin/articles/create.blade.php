@extends('admin.template.main')

@section('title', 'Crear Articulos')

@section('content')

	{!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true]) !!}
		<div class = "form-group">
			{!! Form::label('title', 'Titulo') !!}
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('content', 'Contenido') !!}
			{!! Form::textarea('content', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('tags', 'Tag') !!}
			{!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'required', 'placeholder' => 'Seleccione un tag', 'multiple']) !!}
		</div>
		<br>
		<div class = "form-group">
			{!! Form::label('category_id', 'Categoria') !!}
			{!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'required', 'placeholder' => 'Seleccione una opcion']) !!}
		</div>

		<div class = 'form-group'>
			{!! Form::label('image', 'Imagen') !!}
			{!! Form::file('image') !!}
		</div>

		<div class = 'form-group'>
			{!! Form::submit('Agregar articulo', ['class' => 'btn btn-primary']) !!}
		</div>
		
	{!! Form::close() !!}

@endsection