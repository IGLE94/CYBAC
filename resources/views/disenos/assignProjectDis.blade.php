@extends('layout')

@section('title', 'Proyectos Diseño Asignados')

@section('content')
<div class="container">
	<div class="bg-white shadow rounded p-5">
		<h1 class="display-4">Proyectos Asignados</h1>

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Requerimiento</th>
						<th>Empresa</th>
						<th>Fecha de asignación</th>
					</tr>
				</thead>
				<tbody>
				@foreach($usuario->disenos as $proyecto)
					<tr>
						<td>{{ $proyecto->id }}</td>
						<td>{{ $proyecto->requerimiento }}</td>
						<td>{{ $proyecto->empresa->nombre }}</td>
						<td>{{ $proyecto->pivot->created_at->format('d/m/Y') }}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection