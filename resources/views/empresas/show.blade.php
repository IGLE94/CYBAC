@extends('layout')

@section('content')
<div class="container">
	<div class="bg-white shadow rounded p-5">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h1>Información de la Empresa</h1>

			<a class="btn btn-primary" href="{{ route('empresas.edit', $empresa->id ) }}">Editar Empresa</a>
		</div>
		
		<div class="table-responsive">
			<table class="table table-hover">
				<tr>
					<th>Empresa:</th>
					<td>{{ $empresa->nombre }}</td>
				</tr>
				<tr>
					<th>Tel. Contacto:</th>
					<td>{{ $empresa->contacto }}</td>
				</tr>
				<tr>
					<th>Email:</th>
					<td>{{ $empresa->email }}</td>
				</tr>
				<tr>
					<th>Ubicación:</th>
					<td>{{ $empresa->ubicacion }}</td>
				</tr>
				<tr>
					<th>Giro:</th>
					<td>{{ $empresa->giro }}</td>
				</tr>
			</table>
		</div>
		<a class="btn btn-success" href="{{ route('empresas.index') }}">Regresar</a>
	</div>
</div>
@endsection