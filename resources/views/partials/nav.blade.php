<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
	
	<div class="container">

		<a class="navbar-brand" href="{{ route('home') }}">
			{{-- {{ config('app.name') }} --}} <img class="img-fluid logo" src="/img/logo.png" alt="logo">
		</a>

		<button class="navbar-toggler" type="button" 
			data-toggle="collapse" 
			data-target="#navbarSupportedContent" 
			aria-controls="navbarSupportedContent" 
			aria-expanded="false" 
			aria-label="{{ __('Toggle navigation') }}">
	        <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav nav-pills">

				<li class="nav-item">
					<a class="nav-link {{ setActive('ordenes.index') }}" href="{{ route('ordenes.index') }}">
						Ordenes
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link {{ setActive('clientes.index') }}" href="{{ route('clientes.index') }}">Clientes</a>
				</li>

				<li class="nav-item">
					<a class="nav-link {{ setActive('servicios.index') }}" href="{{ route('servicios.index') }}">Servicios</a>
				</li>

				<li class="nav-item">
					<a class="nav-link {{ setActive('equipos.index') }}" href="{{ route('equipos.index') }}">Equipos</a>
				</li>

				@auth
					@if( auth()->user()->isAdmin() )
						<li class="nav-item">
							<a class="nav-link {{ setActive('usuarios.index') }}" href="{{ route('usuarios.index') }}">Usuarios</a>
						</li>
					@endif	

					<li class="nav-item">
						<a class="nav-link" href="/usuarios/{{ auth()->id() }}/editar">Mi cuenta</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#" onclick="event.preventDefault();
		                    document.getElementById('logout-form').submit();">Cerrar Sesión</a>
		            </li>
				@else
					<li class="nav-item">
						<a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">Login</a>
					</li>
				@endauth

			</ul>
		</div>

	</div>

</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	@csrf
</form>