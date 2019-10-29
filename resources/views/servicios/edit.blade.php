@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			
			<form class="bg-white shadow rounded py-3 px-4"
			method="POST"
			action="{{ route('servicios.update', $servicio->id) }}">

			{!! method_field('PUT') !!}
			@csrf

			<h1 class="display-4">Editar: {{ $servicio->servicio }}</h1>
			<hr>

			<div class="form-group">
				<label for="servicio">Servicio:</label>
				<input class="form-control bg-light shadow-sm @error('is-invalid') @else border-0 @enderror border-0"
				id="servicio"
				name="servicio"
				value="{{ $servicio->servicio }}">

				@error('servicio')
					<span class="invalid-feelback" role="alert">
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