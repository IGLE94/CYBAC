@extends('layout')

@section('title', 'Categorias')

@section('content')
<div class="container">
	<div class="bg-white shadow rounded py-2 px-5">	

		<div class="d-flex justify-content-between align-items-center py-4">
			<h1 class="display-5">Categorias</h1>
			@auth
				<a class="btn btn-primary" href="{{ route('categorias.create') }}">Agregar Categoria</a>
			@endauth
		</div>

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Categoria</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categorias as $categoria)
					<tr>
						<td>{{ $categoria->id }}</td>
						<td>{{ $categoria->categoria }}</td>
						<td>
							<a class="btn btn-outline-primary" href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<a class="btn btn-success" href="{{ route('disenos.index') }}">Regresar</a>
	</div>
</div>
@endsection