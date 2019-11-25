@extends('layout')

@section('title', 'Proyectos')

@section('content')
<div class="container">
	<div class="bg-white shadow rounded py-2 px-5">
		@include('partials.navProjects')

		<img class="img-fluid mb-4" src="/img/projects.svg" alt="proyectos">
	</div>
</div>
@endsection