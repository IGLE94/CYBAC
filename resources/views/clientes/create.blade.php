@extends('layout')

@section('title', 'Clientes')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto p-5">
			
			<form class="bg-white shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('clientes.store') }}">
				@csrf

				<div class="form-group">
					@include('partials.navClientOrder')
				</div>

				<h4 align="center"><b>Agregar Cliente</b></h4>
				<hr>

				<div class="form-group">
				<label for="nombre">Nombre del Cliente:</label>
				<input class="form-control bg-light shadow-sm @error('nombre') is-invalid @else border-0 @enderror" 
					id="nombre" 
					name="nombre">
				@error('nombre')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				</div>

				<div class="form-group">
				<label for="paterno">Apellido Paterno:</label>
				<input class="form-control bg-light shadow-sm @error('paterno') is-invalid @else border-0 @enderror"
					id="paterno" 
					name="paterno">
				@error('paterno')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				</div>

				<div class="form-group">
				<label for="materno">Apellido Materno:</label>
				<input class="form-control bg-light shadow-sm @error('materno') is-invalid @else border-0 @enderror"
					id="materno" 
					name="materno">
				@error('materno')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				</div>

				<div class="form-group">
				<label for="email">Email:</label>
				<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" 
					id="email" 
					type="email" 
					name="email">
				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				</div>

				<div class="form-group">
				<label for="telefono">Tel. Celular:</label>
				<input class="form-control bg-light shadow-sm @error('telefono') @else border-0 @enderror" 
					id="telefono" 
					type="number" 
					name="telefono">
				@error('telefono')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				</div>

				<button class="btn btn-primary btn-lg btn-block">Agregar</button>
				<a class="btn btn-outline-danger btn-block" href="{{ route('ordenes.index') }}">Cancelar</a>
			</form>

		</div>
	</div>
</div>
@endsection