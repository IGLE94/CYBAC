@extends('layout')

@section('title', 'Proyectos')

@section('content')
<div class="container">
	<div class="bg-white shadow rounded py-2 px-5">
		@include('partials.navProjects')

		<div class="d-flex justify-content-between align-items-center mb-3 py-5">
			<h1 class="display-5">Empresas</h1>
			@auth
				<a class="btn btn-primary" href="{{ route('empresas.create') }}">Agregar Empresa</a>
			@endauth
		</div>

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Tel. de Contacto</th>
						<th>Email</th>
						{{-- <th>Ubicación</th>
						<th>Giro</th> --}}
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($empresas as $empresa)
					<tr>
						<td>
							<a class="btn btn-outline-info btn-sm" href="{{ route('empresas.show', $empresa->id ) }}">
								{{ $empresa->nombre }}
							</a>
						</td>
						<td>{{ $empresa->contacto }}</td>
						<td>{{ $empresa->email }}</td>
						{{-- <td>{{ $empresa->ubicacion }}</td>
						<td>{{ $empresa->giro }}</td> --}}
						<td>
							<a class="btn btn-outline-primary" href="{{ route('empresas.edit', $empresa->id) }}">Editar</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection