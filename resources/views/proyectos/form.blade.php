@csrf

<hr>

<div class="form-group">
	<div class="d-flex justify-content-between align-items-center mb-1">
		<label class="mb-0" for="proyecto">Tipo de Proyecto:</label>
		<a class="btn btn-primary btn-sm" href="{{ route('tipos.create') }}">ADD Tipo</a>
	</div>
		<select class="custom-select bg-light shadow-sm @error('proyecto') is-invalid @else border-0 @enderror" 
			id="proyecto" 
			name="proyecto">
				<option selected disabled="">Tipo de proyecto</option>
				@foreach($proyectos as $id => $proyecto)
					<option value="{{ $id }}">{{ $proyecto }}</option>
				@endforeach
		</select>

		@error('proyecto')
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
	<label for="tipo">Requerimiento:</label>
	<input class="form-control bg-light shadow-sm @error('tipo') is-invalid @else border-0 @enderror"
	 	id="tipo" 
		type="text" 
		name="tipo">
		{{-- value="{{ $empresa->tipo ?? old('tipo') }}"> --}}

	@error('tipo')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror	
</div>

<hr>