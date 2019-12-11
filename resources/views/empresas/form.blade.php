@csrf

<hr>
<div class="form-group">
	<label for="nombre">Nombre de la Empresa:</label>
	<input class="form-control bg-light shadow-sm @error('nombre') is-invalid @else border-0 @enderror"
	 	id="nombre" 
		type="text" 
		name="nombre" 
		value="{{ $empresa->nombre ?? old('nombre') }}">

	@error('nombre')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror	
</div>

<div class="form-group">
	<label for="contacto">Tel. Contacto:</label>
	<input class="form-control bg-light shadow-sm @error('contacto') is-invalid @else border-0 @enderror" 
		id="contacto" 
		type="number" 
		name="contacto" 
		value="{{ $empresa->contacto ?? old('contacto') }}">

	@error('contacto')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror	
</div>

<div class="form-group">
	<label for="email">Email:</label>
	<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
		id="email" 
		type="email" 
		name="email" 
		value="{{ $empresa->email ?? old('email') }}">

	@error('email')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<label for="ubicacion">Ubicación:</label>
	<input class="form-control bg-light shadow-sm @error('ubicacion') is-invalid @else border-0 @enderror" 
		id="ubicacion" 
		type="text" 
		name="ubicacion" 
		value="{{ $empresa->ubicacion ?? old('ubicacion') }}">

	@error('ubicacion')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<label for="giro">Giro:</label>
	<input class="form-control bg-light shadow-sm @error('giro') is-invalid @else border-0 @enderror"
		id="giro" 
		type="text" 
		name="giro" 
		value="{{ $empresa->giro ?? old('giro') }}">

	@error('giro')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>
