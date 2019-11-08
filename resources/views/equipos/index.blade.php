@extends('layout')

@section('title', 'Equipos')

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<div class="row">
			<div class="col-12">
				<h1 class="display-4">Equipos Registrados</h1>
			</div>
			<div class="col-12 table-responsive">
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

									{{-- <form style="display: inline" 
										method="POST" 
										action="{{ route('equipos.destroy', $equipo->id) }}">
										@method('DELETE')
										@csrf
										
										<button class="btn btn-outline-danger" type="submit">Eliminar</button>
									</form> --}}
								</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection