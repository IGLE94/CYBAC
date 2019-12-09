@csrf

<hr>
<div class="form-group">
	<label for="categoria">Agregar Categoria:</label>
	<input class="form-control bg-light shadow-sm @error('categoria') is-invalid @else border-0 @enderror"
	 	id="categoria" 
		type="text" 
		name="categoria" 
		value="{{ $categoria->categoria ?? old('categoria') }}">

	@error('categoria')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror	
</div>