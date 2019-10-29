@extends('layout')

@section('content')
	<div class="container">
		
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h1 class="display-4">Ordenes</h1>
			@auth
				<a class="btn btn-primary" href="{{ route('ordenes.create') }}">Agregar Orden</a>
			@endauth
		</div>

		<table class="table table-hover">
			<thead>
				<tr>
					<th>Orden</th>
					<th>Tipo de Servicio</th>
					<th>Descripción</th>
					<th>Fecha de Recepción</th>
					<th>Cliente</th>
					@auth
					<th>Acciones</th>
					@endauth
				</tr>
			</thead>
			<tbody>
				@foreach($ordenes as $orden)
					<tr>
						<td>
							<a href="{{ route('ordenes.show', $orden->id) }}">
								{{ $orden->id }}
							</a>
						</td>
						<td>
							--------------
						</td>
						<td>{{ $orden->descripcion }}</td>
						<td>
							{{ $orden->created_at->format('d/m/Y') }}
						</td>
						<td>{{ $orden->cliente->nombre }} {{ $orden->cliente->ap_paterno }} {{ $orden->cliente->ap_materno }}</td>
						@auth
						<td>
							<a class="btn btn-outline-primary" href="{{ route('ordenes.edit', $orden->id) }}">Editar</a>

							<form style="display:inline" method="POST" action="{{ route('ordenes.destroy', $orden->id) }}">
							{!! method_field('DELETE') !!}	
							@csrf
								<button class="btn btn-outline-danger" type="submit">Eliminar</button>	
							</form>
						</td>
						@endauth
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>	
@endsection