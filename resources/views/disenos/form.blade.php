@csrf

<hr>
<div class="form-group">
	<label for="empresa">Empresa:</label>
	<input 
		id="empresa" 
		type="text" 
		name="empresa">
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