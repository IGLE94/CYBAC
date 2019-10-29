@extends('layout')

@section('content')
	<div class="container">
		
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h1 class="display-4">Clientes</h1>
		</div>

		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Email</th>
					<th>Telefono</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($clientes as $cliente)
					<tr>
						<td>
							<a href="{{ route('clientes.show', $cliente->id) }}">
								{{ $cliente->nombre }}
							</a>
						</td>
						<td>
							{{ $cliente->ap_paterno }}
						</td>
						<td>
							{{ $cliente->ap_materno }}
						</td>
						<td>{{ $cliente->email }}</td>
						<td>{{ $cliente->telefono }}</td>
						{{-- <td>
							<a class="btn btn-outline-primary" href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>

							<form style="display:inline" method="POST" action="{{ route('clientes.destroy', $cliente->id) }}">
							{!! method_field('DELETE') !!}	
							@csrf
								<button class="btn btn-outline-danger" type="submit">Eliminar</button>	
							</form>
						</td> --}}
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>	
@endsection