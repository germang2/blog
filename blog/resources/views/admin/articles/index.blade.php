@extends('admin.template.main')

@section('title', 'Articulos')

@section('content')

	<h2>Articulos</h2>
	<a href="{{ route('articles.create') }}" class="btn btn-info">Registrar un nuevo articulo</a>

	<!-- Buscador de articulos -->	
	{!! Form::open(['route' => 'articles.index', 'class' => 'navbar-form pull-right', 'method' => 'GET']) !!}
		<div class = "form-group">
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => ' Buscar articulo', 'id' => 'search']) !!}
		</div>
	{!! Form::close() !!}
	<!-- Fin de buscador -->
	<hr>
	<table class = "table table-striped">
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Categoria</th>
			<th>Usuario</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
			<tr>
				<td>{{ $article->id }}</td>
				<td>{{ $article->title }}</td>
				<td>{{ $article->category->name }}</td>
				<td>{{ $article->user->name }}</td>
				<td>
					<a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

					<a href="{{ route('admin.articles.destroy', $article->id) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea borrar la categoria?')"><span class="glyphicon glyphicon-remove-circle" aria_hidden="true"></span></a>
				</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>

		{!! $articles->render() !!}

@endsection