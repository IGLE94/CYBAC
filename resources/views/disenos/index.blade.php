@extends('layout')

@section('title', 'Diseños')

@section('content')
<div class="container">
	<div class="bg-white shadow rounded py-2 px-5">	
		@include('partials.navProjects')

		<div class="d-flex justify-content-between align-items-center mb-3 py-5">
			<h1 class="display-5">Proyectos de Diseño</h1>
			@auth
				<a class="btn btn-primary" href="{{ route('disenos.create') }}">Agregar Proyecto</a>
			@endauth
		</div>

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Requerimiento</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($disenos as $diseno)
					<tr>
						<td>
							<a class="btn btn-outline-info btn-sm" href="{{ route('disenos.show', $diseno->id) }}">{{ $diseno->id }}</a>
						</td>
						<td>{{ $diseno->requerimiento }}</td>
						<td>
							<a class="btn btn-outline-primary" href="{{ route('disenos.edit', $diseno->id ) }}">Editar</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection