@extends('layout')

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<div class="row">
			<div class="col-12">	
				<div class="d-flex justify-content-between align-items-center mb-3">
					<h1 class="display-4">Ordenes</h1>
					@auth
						<a class="btn btn-primary" href="{{ route('clientes.create') }}">Agregar Orden</a>
					@endauth
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
					<tr>
						<th>Orden</th>
						<th>Tipo de Servicio</th>
						<th>Descripción</th>
						<th>Cliente</th>
						<th>Status</th>
						<th>Fecha de Recepción</th>
						@auth
							<th>Acciones</th>
						@endauth
					</tr>
					</thead>
					<tbody>
					@foreach($ordenes as $orden)
						<tr>
							<td>
								<a class="btn btn-outline-info" href="{{ route('ordenes.show', $orden->id) }}">
									{{ $orden->id }}
								</a>
							</td>

							@if($orden->servicio_id)
								<td>
									{{ $orden->servicio->servicio }}
								</td>
							@else
								<td></td>
							@endif	

							<td>{{ $orden->descripcion }}</td>
									
							@if($orden->cliente_id)
								<td>
									<a class="btn btn-outline-info" href="{{ route('clientes.show', $orden->cliente_id) }}">
										{{ $orden->cliente->nombre }} {{ $orden->cliente->paterno }} {{ $orden->cliente->materno }}
									</a>
								</td>
								@else
									<td></td>
								@endif

								<td>{{ $orden->status == false ? 'Pendiente' : 'Completa' }}</td>
								<td>{{ $orden->created_at->format('d/m/Y') }}</td>

								@auth
									<td>
										<div class="btn-group">
											<a class="btn btn-outline-primary" href="{{ route('ordenes.edit', $orden->id) }}">Editar</a>

											<a class="btn btn-outline-success" href="#" onclick="document.getElementById('change-status').submit()">{{ $orden->status == true ? 'Pendiente' : 'Completa' }}</a>

											<a class="btn btn-outline-danger" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
										</div>

										<form id="change-status" method="POST" action="{{ route('ordenes.status', $orden->id) }}">	
											@method('PATCH')
											@csrf
										</form>

										<form id="delete-project" class="d-none" {{-- style="display:inline" --}} method="POST" action="{{ route('ordenes.destroy', $orden->id) }}">
										@method('DELETE')	
										@csrf	
										</form>

									</td>
								@endauth
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>	
@endsection