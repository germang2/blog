<!DOCTYPE html>
<html>
<head>
	<title> @yield('title', 'Default') | Pagina de administracion </title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
	<section>
		<div class="container">
			<div class="row">
				<div class="col s12">
					@include('admin/template/partials/nav')
				</div>
			</div>
			<hr>
			<div class="row" id='title'>
				<div class="col s12">
					<h1>Blog</h1>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col s12">
					@include('flash::message')
					@include('admin.template.partials.errors')
					@yield('content')					
				</div>
			</div>
		</div>

		<script src = "{{ asset('plugins/jquery/js/jquery-3.2.1.js') }}"></script>
		<script src = "{{ asset('plugins/bootstrap/js/bootstrap.js') }}" ></script>

	</section>
</body>
</html>