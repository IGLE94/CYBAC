@csrf

<hr>

<div class="form-group">
	<div class="d-flex justify-content-between align-items-center mb-1">
		<label class="mb-0" for="tipo">Tipo de Proyecto:</label>
		<a class="btn btn-primary btn-sm" href="{{ route('tipos.create') }}">ADD Tipo</a>
	</div>
		<select class="custom-select bg-light shadow-sm @error('tipo') is-invalid @else border-0 @enderror"
			id="tipo"
			name="tipo">
				<option selected disabled="">Tipo de proyecto</option>
				@foreach($tipos as $id => $tipo)
					<option value="{{ $id }}">{{ $tipo }}</option>
				@endforeach
		</select>

		@error('tipo')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form-group">

	<label for="empresa">Empresa:</label>
	<select class="custom-select bg-light shadow-sm @error('empresa') is-invalid @else border-0 @enderror"
		id="empresa"
		name="empresa">
			<option selected disabled="">Empresas</option>
			@foreach($empresas as $id => $empresa)
				<option value="{{ $id}}">{{ $empresa }}</option>
			@endforeach
	</select>

	@error('empresa')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<label for="requerimiento">Requerimiento:</label>
	<input class="form-control bg-light shadow-sm @error('requerimiento') is-invalid @else border-0 @enderror"
	 	id="requerimiento"
		type="text"
		name="requerimiento"
		value="{{ $proyecto->requerimiento ?? old('requerimiento') }}">

	@error('requerimiento')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<hr>