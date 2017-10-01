@extends('admin.template.main')

@section('title', 'Tags')

@section('content')

	<h2>Tags</h2>
	<hr>
	<a href="{{ route('tags.create') }}" class="btn btn-info">Registrar un nuevo tag</a>
	<!-- Buscador de tags -->
	
	{!! Form::open(['route' => 'tags.index', 'class' => 'navbar-form pull-right', 'method' => 'GET']) !!}

		<div class = "form-group">
			{!! Form::text('tag', null, ['class' => 'form-control', 'placeholder' => ' Buscar tag', 'id' => 'search']) !!}
		</div>

	{!! Form::close() !!}

	<!-- Fin de buscador -->
	<hr>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($tags as $tag)
			<tr>
				  <td>{{ $tag->id }}</td>
				  <td>{{ $tag->tag }}</td>
				  <td>
					  <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					  <a href="{{ route('admin.tags.destroy', $tag->id) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea borrar el tag?')"><span class="glyphicon glyphicon-remove-circle" aria_hidden="true"></span></a>
				  </td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $tags->render() !!}

@endsection