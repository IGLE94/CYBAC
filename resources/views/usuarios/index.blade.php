@extends('layout')

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<div class="row">
			<div class="col-12">
				<div class="d-flex justify-content-between align-items-center mb-3">
					<h1 class="display-4">Usuarios</h1>

					<a class="btn btn-primary" href="{{ route('usuarios.create') }}">Agregar Usuario</a>
				</div>

				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Email</th>
								<th>Role</th>
								<th>Descripción</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($usuarios as $usuario)
							<tr>
								<td>{{ $usuario->id }}</td>
								<td>{{ $usuario->name }}</td>
								<td>{{ $usuario->email }}</td>
								<td>
									{{ $usuario->roles->pluck('display_name')->implode(', ') }}
								</td>
								<td>
									{{ $usuario->roles->pluck('description')->implode('') }}
								</td>
								<td>
									<a class="btn btn-outline-primary" href="{{ route('usuarios.edit', $usuario->id ) }}">Editar</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection