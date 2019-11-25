<ul class="nav nav-pills nav-justified bg-white shadow rounded p-2">

	<li class="nav-item">
		<a class="nav-link {{ setActive('disenos.index') }}" href="{{ route('disenos.index') }}">Proyectos de Diseño</a>
	</li>

	<li class="nav-item">
		<a class="nav-link {{ setActive('empresas.index') }}" href="{{ route('empresas.index') }}">Empresas</a>
	</li>

	<li class="nav-item">
		<a class="nav-link {{ setActive('desarrollos.index') }}" href="{{ route('desarrollos.index') }}">Proyectos de Desarrollo</a>
	</li>

</ul>