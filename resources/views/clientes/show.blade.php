@extends('layout')

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">

		<div class="d-flex justify-content-between align-items-center mb-3">
			<h1>Información del Cliente</h1>
			<a class="btn btn-primary" href="{{ route('clientes.edit', $cliente->id) }}">Editar Cliente</a>
		</div>

		<table class="table">
			<tr>
				<th>Nombre:</th>
				<td>{{ $cliente->nombre }}</td>
			</tr>
			<tr>
				<th>Apellido Paterno:</th>
				<td>{{ $cliente->paterno }}</td>
			</tr>
			<tr>
				<th>Apellido Materno:</th>
				<td>{{ $cliente->materno }}</td>
			</tr>
			<tr>
				<th>Email:</th>
				<td>{{ $cliente->email }}</td>
			</tr>
			<tr>
				<th>Tel. Celular:</th>
				<td>{{ $cliente->telefono }}</td>
			</tr>
		</table>
		<a class="btn btn-success" href="{{ route('ordenes.index') }}">Regresar</a>
	</div>
</div>
@endsection