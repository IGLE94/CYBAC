<ul class="nav nav-pills nav-justified bg-white shadow rounded p-2">

	<li class="nav-item">
		<a class="nav-link {{ setActive('empresas.index') }}" href="{{ route('empresas.index') }}">Empresas</a>
	</li>

	<li class="nav-item">
		<a class="nav-link {{ setActive('proyectos.index') }}" href="{{ route('proyectos.index') }}">Proyectos</a>
	</li>

</ul>