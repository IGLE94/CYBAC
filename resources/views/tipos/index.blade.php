@extends('layout')

@section('title', 'Tipos de Proyectos')

@section('content')
<div class="container">
	<div class="bg-white shadow rounded py-2 px-5">

		<div class="d-flex justify-content-between align-items-center py-4">
			<h1 class="display-5">Tipos de Proyectos</h1>
			@auth
				<a class="btn btn-primary" href="{{ route('tipos.create') }}">ADD Tipo de Proyecto</a>
			@endauth
		</div>

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tipo Proyecto</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tipos as $tipo)
					<tr>
						<td>{{ $tipo->id }}</td>
						<td>{{ $tipo->tipo }}</td>
						<td>
							<a class="btn btn-outline-primary" href="{{ route('tipos.edit', $tipo->id) }}">Editar</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<a class="btn btn-success" href="{{ route('proyectos.index') }}">Regresar</a>
	</div>
</div>
@endsection