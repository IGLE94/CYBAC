{{-- <nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm"> --}}

	{{-- <div class="collapse navbar-collapse"> --}}
		<ul class="nav nav-pills justify-content-center bg-white shadow rounded py-2 px-6">

			<li class="nav-item">
				<a class="nav-link {{ setActive('clientes.create') }}" href="{{ route('clientes.create') }}">Agregar Cliente</a>
			</li>

			<li class="nav-item">
				<a class="nav-link {{ setActive('equipos.create') }}" href="{{ route('equipos.create') }}">Agregar Equipo</a>
			</li>

			<li class="nav-item">
				<a class="nav-link {{ setActive('ordenes.create') }}" href="{{ route('ordenes.create') }}">Agregar Orden</a>
			</li>

		</ul>
	{{-- </div> --}}

{{-- </nav> --}}