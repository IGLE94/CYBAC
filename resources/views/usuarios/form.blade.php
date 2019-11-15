@csrf
	
	<hr>
	<div class="form-group">
		<label for="name">Nombre del usuario:</label>
		<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" 
			id="name" 
			type="text" 
			name="name" 
			value="{{ $usuario->name ?? old('name') }}">

		@error('name')
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
			value="{{ $usuario->email ?? old('email') }}">

		@error('email')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	@unless($usuario->id)
	<div class="form-group">
		<label for="password">Contraseña:</label>
		<input class="form-control bg-light shadow-sm @error('password') is-invalid @else border-0 @enderror" 
			id="password" 
			type="password" 
			name="password">

		@error('password')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div> 

	<div class="form-group">
		<label for="password_confirmation">Confirmar contraseña:</label>
		<input class="form-control bg-light shadow-sm @error('password_confirmation') is-invalid @else border-0 @enderror" 
			id="password_confirmation" 
			type="password" 
			name="password_confirmation">

		@error('password_confirmation')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	@endunless 

	@if( auth()->user()->isAdmin() )
	<div class="form-group">
		<div class="checkbox">
			@foreach($roles as $id => $name)
				<label>	
				<input class="m-3" 
					id="roles" 
					type="checkbox"
					value="{{ $id }}"
					{{ $usuario->roles->pluck('id')->contains($id) ? 'checked' : '' }} 
					name="roles[]" >
						{{ $name }}
				</label>
			@endforeach
		</div>
		{!! $errors->first('roles', '<span class=error><strong>:message</strong></span>') !!}
	</div>
	<hr>
	@endif