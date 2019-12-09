@extends('layout')

@section('title', 'Diseños')

@section('content')
<div class="container">
	<div class="bg-white shadow rounded py-2 px-5">	
		@include('partials.navProjects')

		<div class="d-flex justify-content-between align-items-center py-4">
			<h1 class="display-5">Proyectos de Diseño</h1>
			@auth
				<a class="btn btn-primary" href="{{ route('disenos.create') }}">Agregar Proyecto</a>
			@endauth
		</div>

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Título</th>
						<th>Empresa</th>
						<th>Usuarios</th>
						<th><a class="btn btn-success" href="{{ route('categorias.index') }}">Categorias</a></th>
						<th>Actividades</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($disenos as $diseno)
					<tr>
						<td>
							<a class="btn btn-outline-info btn-sm" href="{{ route('disenos.show', $diseno->id) }}">{{ $diseno->titulo }}</a>
						</td>
						<td>{{ $diseno->empresa->nombre }}</td>
						<td>{{ $diseno->users->pluck('name')->implode(', ') }}</td>
						<td>{{ $diseno->categoria->categoria }}</td>
						<td>{{ $diseno->actividades->pluck('actividad')->implode(', ') }}</td>
						<td>
							<a class="btn btn-outline-primary" href="{{ route('disenos.edit', $diseno->id) }}">Editar</a>
							<a class="btn btn-info" href="{{ route('assignDisenos', $diseno->id) }}">Asignar</a>
							<a class="btn btn-dark" href="{{ route('actividades.create', $diseno->id) }}">Crear Actividades</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection