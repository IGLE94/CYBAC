@csrf
<hr>

<div class="form-group">
	<label for="tipo">Tipo de Proyecto:</label>
	<input class="form-control bg-light shadow-sm @error('tipo') is-invalid @else border-0 @enderror" 
		id="tipo" 
		type="text" 
		name="tipo"
		value="{{ $tipo->tipo ?? old('tipo') }}">

	@error('tipo')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>