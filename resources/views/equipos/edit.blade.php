@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto p-5">

			<form class="bg-white shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('equipos.update', $equipo->id) }}">
				@method('PUT')
				@csrf


				<h4 align="center"><b>Editar Equipo:</b></h4>
				<hr>

				<label for="equipo">Tipo de Equipo:</label>
				<input class="form-control @error('equipo') is-invalid @else border-0 @enderror" 
					id="equipo" 
					type="text" 
					name="equipo"
					value="{{ $equipo->equipo }}">
				@error('equipo')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<br>
				<label for="marca">Marca:</label>
				<input class="form-control @error('marca') is-invalid @else border-0 @enderror" 
					id="marca" 
					type="text" 
					name="marca"
					value="{{ $equipo->marca }}">
				@error('marca')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<br>
				<label for="modelo">Modelo:</label>
				<input class="form-control @error('modelo') is-invalid @else border-0 @enderror" 
					id="modelo" 
					type="text" 
					name="modelo"
					value="{{ $equipo->modelo }}">
				@error('modelo')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<br>
				<label for="serie">Numero de Serie:</label>
				<input class="form-control @error('serie') is-invalid @else border-0 @enderror" 
					id="serie" 
					type="text" 
					name="serie"
					value="{{ $equipo->serie }}">
				@error('serie')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror

				<button class="btn btn-primary btn-lg btn-block">Agregar</button>
				<a class="btn btn-outline-danger btn-block" href="{{ route('equipos.index') }}">Cancelar</a>
			</form>
		</div>
	</div>
</div>
@endsection