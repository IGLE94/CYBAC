@extends('layout')

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<h1>Número de Orden: {{ $cliente->orders->pluck('id')->implode('') }}</h1>
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
	</div>
</div>
@endsection