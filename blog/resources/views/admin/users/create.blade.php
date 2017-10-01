@extends('admin/template/main')

@section('title') Crear usuario @endsection

@section('content') 

	{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'place-holder' => 'Nombre completo', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo electronico') !!}
			{!! Form::text('email', null, ['class' => 'form-control', 'place-holder' => 'example@gmail.com', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::text('password', null, ['class' => 'form-control', 'place-holder' => '********', 'required']) !!}
		</div>		

		
		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion', 'required']) !!}
		</div>
			
		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primay']) !!}
		</div>

	{!! Form::close() !!}

@endsection