@extends('admin.template.main')

@section('title', 'Listado de Categorias')

@section('content')

	<h2>Categorias</h2>
	<hr>
	<a href="{{ route('categories.create') }}" class="btn btn-info">Registrar nueva categoria</a>
	<hr>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
			<tr>
				  <td>{{ $category->id }}</td>
				  <td>{{ $category->name }}</td>
				  <td>
					  <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					  
					  <a href="{{ route('admin.categories.destroy', $category->id) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea borrar la categoria?')"><span class="glyphicon glyphicon-remove-circle" aria_hidden="true"></span></a>
				  </td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $categories->render() !!}

@endsection