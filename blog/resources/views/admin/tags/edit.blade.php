@extends('admin.template.main')

@section('title', 'Editar Tag' . $tag->name)

@section('content')

	  {!! Form::open(['route' => ['tags.update', $tag], 'method' => 'PUT']) !!}
	  	<div class="form-group">
	  		{!! Form::label('tag', 'Nombre') !!}
	  		{!! Form::text('tag', $tag->tag, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'required']) !!}
	  	</div>
	  	<div class="form-group">
	  		{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
	  	</div>
	  {!! Form::close() !!}

@endsection