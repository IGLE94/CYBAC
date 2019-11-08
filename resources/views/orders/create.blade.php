@extends('layout')

@section('title', 'ordenes')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto px-5">

				<form class="bg-white shadow rounded py-3 px-4" 
					method="POST" 
					action="{{ route('ordenes.store') }}">

					@csrf

					<div class="form-group">
						@include('partials.navClientOrder')
					</div>

					<h4 align="center"><b>Agregar Orden</b></h1>
					<hr>

					<div class="form-group">
						<div class="d-flex justify-content-between align-items-center mb-1">
							<label class="mb-0" for="servicio">Tipo de Servicio:</label>
							<a class="btn btn-primary btn-sm" href="{{ route('servicios.create') }}">ADD servicio</a>
						</div>
							<select class="custom-select bg-light shadow-sm @error('servicio') is-invalid @else border-0 @enderror" 
								id="servicio" 
								name="servicio">
									<option selected disabled="">Tipo de Servicio</option>
									@foreach($servicios as $id => $servicio)
										<option value="{{ $id }}">{{ $servicio }}</option>
									@endforeach
							</select>

							@error('servicio')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
					</div>

					<div class="form-group">
						<label for="cliente">Cliente:</label>
						<select class="custom-select bg-light shadow-sm @error('cliente') is-invalid @else border-0 @enderror"
							id="cliente"
							name="cliente">
								<option selected disabled>Elija el cliente</option>
								@foreach($clientes as $id => $cliente)
									<option value="{{ $id }}">{{ $cliente }}</option>
								@endforeach
						</select>

						@error('cliente')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-group">
						<label for="equipo">Equipo:</label>
						<select class="custom-select bg-light shadow-sm @error('equipo') is-invalid @else border-0 @enderror"
							id="equipo"
							name="equipo">
								<option selected disabled>Elija el equipo</option>
								@foreach($equipos as $id => $equipo)
									<option value="{{ $id }}">{{ $equipo }}</option>
								@endforeach
						</select>
						
						@error('equipo')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-group">
						<label for="descripcion">Descripción:</label>
						<textarea class="form-control bg-light shadow-sm @error('descripcion') is-invalid @else border-0 @enderror" 
							rows="3" 
							id="descripcion"
							name="descripcion" 
							placeholder="Ingrese la descripción de la orden">		
								{{ old('descripcion') }}
						</textarea>

						{{-- <label for="descripcion">Descripción:</label>
						<input class="form-control bg-light shadow-sm @error('is-invalid') @else border-0 @enderror border-0" 
							id="descripcion" 
							name="descripcion" 
							placeholder="Ingrese la descripcion del equipo" 
							value="{{ old('descripcion') }}"> --}}

							@error('descripcion')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror	

					</div>

					<div class="form-group">
						<label for="costoServicio">Costo:</label>
						<input class="form-control bg-light shadow-sm @error('costoServicio') is-invalid @else border-0 @enderror" 
						id="costoServicio" 
						name="costoServicio"
						type="number" 
						placeholder="Ingrese el costo total del servicio"
						value="{{ old('costoServicio') }}">

						@error('costoServicio')
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