@extends('admin.template.main')

@section('title') Lista de usuarios @endsection

@section('content')

	<h2>Lista de usuarios</h2>

	<hr>
	<a href="{{ route('users.create') }}" class="btn btn-info">Agregar nuevo usuario</a>

	<table class="table table-striped">
		<thead>
			<th>#</th>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Accion</th>
			<th>Correo</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>
						@if($user->type == "admin")
							<span class ="p-3 mb-2 bg-primary text-white">{{$user->type}}</span>
						@else
							<span class ="p-3 mb-2 bg-danger text-white">{{$user->type}}</span>
						@endif
					</td>
					<td><a href="" class="btn btn-danger"></a><a href="" class="btn btn-warning"></a></td>
					<td>{{ $user->email }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $users->render() !!}

@endsection