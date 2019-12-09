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
	<label for="titulo">Título del Proyecto:</label>
	<input class="form-control bg-light shadow-sm @error('titulo') is-invalid @else border-0 @enderror"
	 	id="titulo" 
		type="text" 
		name="titulo" 
		value="{{ $diseno->titulo ?? old('titulo') }}">

	@error('titulo')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror	
</div>

<div class="form-group">
	<div class="d-flex justify-content-between align-items-center mb-1">
		<label class="mb-0" for="categoria">Categorias:</label>
		<a class="btn btn-primary btn-sm" href="{{ route('categorias.create') }}">ADD Categoria</a>
	</div>
	<select class="custom-select bg-light shadow-sm @error('categoria') is-invalid @else border-0 @enderror" 
		id="categoria" 
		name="categoria">
		<option selected disabled>Elija la categoria</option>
		@foreach($categorias as $id => $categoria)
			<option value="{{ $id }}">{{ $categoria }}</option>
		@endforeach
	</select>

	@error('categoria')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>
<hr>
















