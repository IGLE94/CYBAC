@extends('layout')

@section('content')
	<div class="container">
		<div class="bg-white p-5 shadow rounded">
			<div class="d-flex justify-content-between align-items-center mb-3">
				<h1>Orden  número: {{ $order->id }}</h1>
				@auth
					<a class="btn btn-primary" href="{{ route('downloadPDF', $order->id)}}">Download PDF</a>	
				@endauth	
			</div>
			
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>Estado:</th>
						<td>{{ $order->status == false ? 'Pendiente' : 'Completa' }}</td>
					</tr>
					<tr>
						<th>Cliente:</th>
						<td>{{ $order->cliente->nombre }} {{ $order->cliente->paterno}} {{ $order->cliente->materno}}</td>
					</tr>
					<tr>
						<th>Tipo de servicio:</th>
						<td>{{ $order->servicio->servicio }}</td>
					</tr>
					<tr>
						<th>Equipo:</th>
						<td>{{ $order->equipo->equipo }}</td>
					</tr>
					<tr>
						<th>Marca:</th>
						<td>{{ $order->equipo->marca }}</td>
					</tr>
					<tr>
						<th>Modelo:</th>
						<td>{{ $order->equipo->modelo }}</td>
					</tr>
					<tr>
						<th>Número de serie:</th>
						<td>{{ $order->equipo->serie }}</td>
					</tr>
					<tr>
						<th>Descripción:</th>
						<td>{{ $order->descripcion }}</td>
					</tr>
					<tr>
						<th>Costo del Servicio:</th>
						<td>${{ $order->costoServicio }}</td>
					</tr>
				</table>
			</div>
			{{-- <p class="lead">Enviado por: {{ $order->id }}</p> --}}
			<p class="text-black-50">Tomada {{ $order->created_at->diffForHumans() }}</p>

			<div class="d-flex justify-content-between align-items-center">
				<a class="btn btn-success" href="{{ route('ordenes.index') }}">Regresar</a>

				@auth
					<div class="btn-group btn-group-sm">
						<a class="btn btn-info" href="{{ route('ordenes.edit', $order->id) }}">Editar</a>

						<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-order').submit()">Eliminar</a>

						<form 
							id="delete-order" 
							class="d-none" 
							method="POST" 
							action="{{ route('ordenes.destroy', $order) }}">
							@csrf
							@method('DELETE')
						</form>
					</div>
				@endauth
			</div>
		</div>
	</div>
@endsection