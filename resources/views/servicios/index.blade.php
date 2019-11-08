@extends('layout')

@section('content')
	<div class="container">
		<div class="bg-white p-5 shadow rounded">
			<div class="row">
				<div class="col-12">
					<div class="d-flex justify-content-between align-items-center mb-3">
						<h1 class="display-4">Servicios</h1>
						<a class="btn btn-primary" href="{{ route('servicios.create') }}">Agregar Servicio</a>
					</div>
				{{-- @if (session()->has('info'))
					<div class="alert alert-success" align="center">{{ session('info')}}</div>
				@endif --}}
				</div>
				<div class="table-responsive">
					<table class="table table-hover">
					<thead>
						<tr>
							<th>Tipo de Servicio</th>
							<th>Fecha de Creación</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($servicios as $servicio)
						<tr>
							<td>{{ $servicio->servicio }}</td>
							<td>{{ $servicio->created_at->format('d/m/Y') }}</td>
							<td>
								<a class="btn btn-outline-primary" href="{{ route('servicios.edit', $servicio->id) }}">Editar</a>

								{{-- <form style="display: inline" 
									method="POST" 
									action="{{ route('servicios.destroy', $servicio->id) }}">
									@method('DELETE')
									@csrf
									
									<button class="btn btn-outline-danger" type="submit">Eliminar</button>
								</form> --}}
							</td>
						</tr>
						@endforeach
					</tbody>
					</table>
					<a class="btn btn-success" href="{{ route('ordenes.create') }}">Regresar</a>
				</div>
			</div>
		</div>
	</div>
@endsection