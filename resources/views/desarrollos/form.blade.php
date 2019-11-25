@csrf

<hr>
<div class="form-group">
	<label for="requerimiento">Requerimiento 1:</label>
	<input class="form-control bg-light shadow-sm @error('requerimiento') is-invalid @else border-0 @enderror"
	 	id="requerimiento" 
		type="text" 
		name="requerimiento" 
		value="{{ $desarrollo->requerimiento ?? old('requerimiento') }}">

	@error('requerimiento')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror	
</div>