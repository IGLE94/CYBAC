@extends('layout')

@section('content')
<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto px-5">
				
				<form class="bg-white shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('usuarios.store') }}">
					
					<h1 class="display-4"><b>Agregar Usuario</b></h1>
					
					@include('usuarios.form', ['usuario' => new App\User])	 

					<button class="btn btn-primary btn-lg btn-block">Guardar</button>
					<a class="btn btn-outline-danger btn-block" href="{{ route('usuarios.index') }}">Regresar</a>
				</form>
			</div>
		</div>
	</div>
@endsection