@extends('layout')

@section('title', 'Show')

@section('content')
<div class="container">
	<div class="bg-white shadow rounded p-5">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h1>Información del Proyecto</h1>

			<a class="btn btn-primary" href="{{ route('desarrollos.edit', $desarrollo->id ) }}">Editar Proyecto</a>
		</div>

		<div class="table-responsive">
			<table class="table table-hover">
				<tr>
					<th>ID:</th>
					<td>{{ $desarrollo->id }}</td>
				</tr>
				<tr>
					<th>Requerimiento:</th>
					<td>{{ $desarrollo->requerimiento }}</td>
				</tr>
			</table>
		</div>
		<a class="btn btn-success" href="{{ route('desarrollos.index') }}">Regresar</a>
</div>
@endsection