@extends('layout')

@section('title', 'Equipos')

@section('content')
<div class="container">

	<h1 class="display-4">Equipos Registrados</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Equipo</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Numero de Serie</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($equipos as $equipo)
			<tr>
				<td>{{ $equipo->equipo }}</td>
				<td>{{ $equipo->marca }}</td>
				<td>{{ $equipo->modelo }}</td>
				<td>{{ $equipo->serie }}</td>
				<td>
					<a class="btn btn-outline-primary" href="{{ route('equipos.edit', $equipo->id) }}">Editar</a>

						<form style="display: inline" 
							method="POST" 
							action="{{ route('equipos.destroy', $equipo->id) }}">
							{{-- {!! method_field('DELETE') !!} --}}
							@method('DELETE')
							@csrf
							
							<button class="btn btn-outline-danger" type="submit">Eliminar</button>
						</form>
				
					</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection