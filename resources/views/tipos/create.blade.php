@extends('layout')

@section('title', 'Crear Tipo de Proyecto')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto px-5">
		
			<form class="bg-white shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('tipos.store') }}">

				<h1 class="display-5 text-center"><b>Agregar Tipo de Proyecto</b></h1>

				 @include('tipos.form', ['tipo' => new App\Tipo])

				<button class="btn btn-primary btn-lg btn-block">Guardar</button>
				<a class="btn btn-outline-danger btn-block" href="{{ route('proyectos.create') }}">Regresar</a>
			</form>

		</div>
	</div>
</div>
@endsection