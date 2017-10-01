@extends('admin/template/main')

@section('title') Editar Usuario @endsection

@section('content') 

	<h4>Editar {{ $user->name }}</h4>
	<hr>

	{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', $user->name, ['class' => 'form-control', 'place-holder' => 'Nombre completo', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo electronico') !!}
			{!! Form::text('email', $user->email, ['class' => 'form-control', 'place-holder' => 'example@gmail.com', 'required']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], $user->type, ['class' => 'form-control', 'required']) !!}
		</div>
			
		<div class="form-group">
			{!! Form::submit('Actualizar', ['class' => 'btn btn-primay']) !!}
		</div>

	{!! Form::close() !!}

@endsection