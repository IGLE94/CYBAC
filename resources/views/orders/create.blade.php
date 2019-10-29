@extends('layout')

@section('title', 'ordenes')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

				<form class="bg-white shadow rounded py-3 px-4" 
					method="POST" 
					action="{{ route('ordenes.store') }}">

					@csrf
					<h1 class="display-4">Agregar Orden</h1>
					<a class="btn btn-primary" href="{{ route('servicios.index') }}">Agregar nuevo servicio</a>
					<hr>
					<div class="form-group">
						<label>Tipo de Servicio:
							<select class="custom-select" name="servicio">
								<option disabled="">Tipo de Servicio</option>
								<option>Gratis</option>
								<option>Manual</option>
							</select>
						</label>
					</div>

					<div class="form-group">
						<label for="descripcion">Descripción:</label>
						<textarea class="form-control @error('descripcion') is-invalid @else border-0 @enderror" 
							rows="3" 
							id="descripcion"
							name="descripcion" 
							placeholder="Ingrese la descripción del equipo de Cómputo">		
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
					<a class="btn btn-outline-danger btn-block" href="{{ route('servicios.index') }}">Cancelar</a>
				</form>
		</div>
	</div>
</div>
@endsection