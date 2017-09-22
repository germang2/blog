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
							<span class="badge badge-pill badge-danger">{{$user->type}}</span>
						@else
							<span class="badge badge-pill badge-success">{{$user->type}}</span>
						@endif
					</td>
					<td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"></a><a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea borrar el usuario?')"></a></td>
					<td>{{ $user->email }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $users->render() !!}

@endsection