@extends('layout')

@section('title', 'Proyectos de Desarrollo')

@section('content')
<div class="container">
	<div class="bg-white shadow rounded py-2 px-5">
		@include('partials.navProjects')

		<div class="d-flex justify-content-between align-items-center py-4">
			<h1 class="display-5">Proyectos de Desarrollo</h1>
			@auth
				<a class="btn btn-primary" href="{{ route('desarrollos.create') }}">Agregar Proyecto</a>
			@endauth
		</div>

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Requerimiento</th>
						<th>Empresa</th>
						<th>Usuarios</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($desarrollos as $desarrollo)
					<tr>
						<td>
							<a class="btn btn-outline-info btn-sm" href="{{ route('desarrollos.show', $desarrollo->id) }}">{{ $desarrollo->id }}</a>
						</td>
						<td>{{ $desarrollo->requerimiento }}</td>
						<td>{{ $desarrollo->empresa->nombre }}</td>
						<td>{{ $desarrollo->users->pluck('name')->implode(', ') }}</td>
						<td>
							<a class="btn btn-outline-primary" href="{{ route('desarrollos.edit', $desarrollo->id) }}">Editar</a>
							<a class="btn btn-info" href="{{ route('assignDesarrollos', $desarrollo->id) }}">Asignar</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection