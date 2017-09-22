@extends('admin/template/main')

@section('title') Crear usuario @endsection

@section('content') 
	
	@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	@endif


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
			{!! Form::select('type', ['' => 'Seleccione tipo','member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control', 'required']) !!}
		</div>
			
		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primay']) !!}
		</div>

	{!! Form::close() !!}

@endsection