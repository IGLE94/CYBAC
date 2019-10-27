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
					<hr>
					<div class="form-group">
						<label for="servicio">Tipo de Servicio:</label>
						<input class="form-control bg-light shadow-sm @error('is-invalid') @else border-0 @enderror border-0" 
							id="servicio" 
							name="tipoServicio" 
							placeholder="Ingrese el tipo de Servicio" 
							value="{{ old('servicio') }}">

							@error('tipoServicio')
								<span class="invalid-feelback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror	

					</div>

					{{-- <label>Tipo de Servicio:
						<select name="tipoServicio">
							<option>Tipo de Servicio</option>
							<option>Gratis</option>
							<option>Manual</option>
						</select>
					</label> --}}

					<button class="btn btn-primary btn-lg btn-block">Agregar</button>

				</form>
		</div>
	</div>
</div>
@endsection