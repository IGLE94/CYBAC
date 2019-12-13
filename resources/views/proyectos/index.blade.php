@extends('layout')

@section('title', 'Proyectos')

@section('content')
<div class="container">
	<div class="bg-white shadow rounded py-2 px-5">
		@include('partials.navProjects')

		<div class="d-flex justify-content-between align-items-center py-4">
			<h1 class="display-5">Proyectos</h1>
			@auth
				<a class="btn btn-primary" href="{{ route('proyectos.create') }}">Agregar Proyecto</a>
			@endauth
		</div>

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Requerimiento</th>
						<th><a class="btn btn-success" href="{{ route('tipos.index') }}">Tipo Proyecto</a></th>
						<th>Empresa</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($proyectos as $proyecto)
					<tr>
						<td>{{ $proyecto->id }}</td>
						<td>{{ $proyecto->requerimiento }}</td>
						<td>{{ $proyecto->tipo['tipo'] }}</td>
						<td>{{ $proyecto->empresa['nombre'] }}</td>
						<td>
							<a class="btn btn-outline-primary" href="{{ route('proyectos.edit', $proyecto->id) }}">Editar</a>
							<a class="btn btn-info" href="{{ route('assignedProjects', $proyecto->id) }}">Asignar Proyecto</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection