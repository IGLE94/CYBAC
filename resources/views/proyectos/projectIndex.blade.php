@extends('layout')

@section('title', 'Proyectos Asignados')

@section('content')
<div class="container">
	<div class="bg-white shadow rounded py-2 px-5">

		<h1 class="display-5">Proyectos</h1>

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Requerimiento</th>
						<th>Tipo Proyecto</th>
						<th>Empresa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($user->proyectos as $proyecto)
					<tr>
						<td>{{ $proyecto->id }}</td>
						<td>{{ $proyecto->requerimiento }}</td>
						<td>{{ $proyecto->tipo->tipo }}</td>
						<td>{{ $proyecto->empresa->nombre }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection