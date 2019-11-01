@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

			@if (session()->has('info'))
				<div class="alert alert-success">{{ session('info')}}</div>
			@endif

			<form class="bg-white shadow rounded py-3 px-4"
			method="POST"
			action="{{ route('servicios.update', $servicio->id) }}">
			{{-- {!! method_field('PUT') !!} --}}
			@method('PUT')
			@csrf

			<h1 class="display-4">Editar Servicio: {{ $servicio->servicio }}</h1>
			<hr>

			<div class="form-group">
				<label for="servicio">Servicio:</label>
				<input class="form-control bg-light shadow-sm @error('servicio') is-invalid @else border-0 @enderror"
				id="servicio"
				name="servicio"
				value="{{ $servicio->servicio }}">

				@error('servicio')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>

			<button class="btn btn-primary btn-lg btn-block">Actualizar</button>
			<a class="btn btn-outline-danger btn-block" href="{{ route('servicios.index') }}">Cancelar</a>
			</form>

		</div>
	</div>
</div>
@endsection