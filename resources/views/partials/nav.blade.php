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

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Agregar Orden
					</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item {{ setActive('ordenes.index') }}" href="{{ route('ordenes.index') }}">Ordenes</a>
						<a class="dropdown-item {{ setActive('clientes.index') }}" href="{{ route('clientes.index') }}">Clientes</a>
						<a class="dropdown-item {{ setActive('servicios.index') }}" href="{{ route('servicios.index') }}">Servicios</a>
						<a class="dropdown-item {{ setActive('equipos.index') }}" href="{{ route('equipos.index') }}">Equipos</a>
					</div>
				</li>

				@auth
					@if( auth()->user()->isAdmin() )
						<li class="nav-item">
							<a class="nav-link {{ setActive('usuarios.index') }}" href="{{ route('usuarios.index') }}">Usuarios</a>
						</li>

						<li class="nav-item">
							<a class="nav-link {{ setActive('empresas.index') }}" href="{{ route('empresas.index') }}">Agregar Proyecto</a>
						</li>
					@endif

					<li class="nav-item">
						<a class="nav-link" href="{{ route('projectIndex', auth()->id() ) }}">Proyectos Asignados</a>
					</li>


					{{-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownThree" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          					Mi cuenta
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdownThree">
        					<a class="dropdown-item" href="/usuarios/{{ auth()->id() }}/editar">Mi Perfil</a>
        					<a class="dropdown-item" href="#" onclick="event.preventDefault();
		                    document.getElementById('logout-form').submit();">Cerrar Sesión de {{ auth()->user()->name }}</a>
        				</div>
					</li> --}}

				@else
					<li class="nav-item">
						<a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">Login</a>
					</li>
				@endauth

			</ul>
		</div>
		@auth
		<ul class="nav justify-content-end">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownThree" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          					{{ auth()->user()->name }}
        		</a>

        		<div class="dropdown-menu" aria-labelledby="navbarDropdownThree">
        			<a class="dropdown-item" href="/usuarios/{{ auth()->id() }}/editar">Mi Perfil</a>
        			<a class="dropdown-item" href="#" onclick="event.preventDefault();
		            document.getElementById('logout-form').submit();">Cerrar Sesión</a>
        		</div>
			</li>
		</ul>
		@endauth
		{{-- Aqui tiene que ir el DROPDOWN de MI CUENTA Y PERFIL --}}
	</div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	@csrf
</form>