@extends('admin.template.main')

@section('title', 'Crear un nuevo tag')

@section('content')

	{!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}	
		<div class = "form-group">
			{!! Form::label('tag', 'Nombre') !!}
			{!! Form::text('tag', null, ['class' => 'form-control', 'place-holder' => 'Nombre del tag', 'required']) !!}
		</div>
		<div class = "form-group">
			{!! Form::submit('Agregar tag', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

@endsection