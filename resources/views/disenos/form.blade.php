@csrf

<hr>
<div class="form-group">
	<label class="mb-0" for="empresa">Empresas:</label>
	<select class="custom-select bg-light shadow-sm @error('empresa') is-invalid @else border-0 @enderror" 
		id="empresa" 
		name="empresa">
		<option selected disabled>Elija la Empresa</option>
		@foreach($empresas as $id => $empresa)
			<option value="{{ $id }}">{{ $empresa }}</option>
		@endforeach
	</select>

	@error('empresa')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<label for="requerimiento">Requerimiento 1:</label>
	<input class="form-control bg-light shadow-sm @error('requerimiento') is-invalid @else border-0 @enderror"
	 	id="requerimiento" 
		type="text" 
		name="requerimiento" 
		value="{{ $diseno->requerimiento ?? old('requerimiento') }}">

	@error('requerimiento')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror	
</div>