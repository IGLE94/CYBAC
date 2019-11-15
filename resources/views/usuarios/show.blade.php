@extends('layout')

@section('content')
<div class="container">
	<div class="bg-white shadow rounded p-5">
		<h1><b>{{ $usuario->name }}</b></h1>

		<table class="table">
			<tr>
				<th>Nombre:</th>
				<td>{{ $usuario->name }}</td>
			</tr>
			<tr>
				<th>Email:</th>
				<td>{{ $usuario->email }}</td>
			</tr>
			<tr>
				<th>Roles:</th>
				<td>{{ $usuario->roles->pluck('display_name')->implode(', ') }}</td>
			</tr>
			<tr>
				<th>Fecha de Alta:</th>
				<td>{{ $usuario->created_at->format('d/m/Y') }}</td>
			</tr>
		</table>

		@can('edit', $usuario)
			<a class="btn btn-info" href="{{ route('usuarios.edit', $usuario->id ) }}">Editar</a>
		@endcan	
	</div>
</div>
@endsection 