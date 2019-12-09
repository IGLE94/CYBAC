@extends('layout')

@section('title', 'Crear Actividades')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto px-5">
		
			<form class="bg-white shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('actividades.store', $diseno->id) }}">
				@method('PUT')
				@csrf
				
				<h1 class="display-5 text-center"><b>Crear Actividad</b></h1>

				 <div class="form-group">
				 	<label for="actividad">Actividad:</label>
				 	<input class="form-control bg-light shadow-sm @error('actividad') is-invalid @else border-0 @enderror"
				 	id="actividad" 
					type="text" 
					name="actividad" 
					value="{{ old('actividad') }}">

					@error('actividad')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				 </div>

				<button class="btn btn-primary btn-lg btn-block">Guardar</button>
				<a class="btn btn-outline-danger btn-block" href="{{ route('disenos.index') }}">Regresar</a>
			</form>

		</div>
	</div>
</div>
@endsection