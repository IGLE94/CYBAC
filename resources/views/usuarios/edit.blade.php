@extends('layout')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto px-5">
				
				@if(session()->has('info'))
					<div class="alert alert-success">
						{{ session('info') }}
					</div>
				@endif
				<form class="bg-white shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('usuarios.update', $usuario->id) }}">
					@method('PUT')
					@csrf

					<p><h1 align="center"><b>Editar Usuario: {{ $usuario->name }}</b></h1></p>
					<p class="text-black-50 text-center"><b>{{ $usuario->roles->pluck('display_name')->implode(", ") }}</b></p>

					@include('usuarios.form')

					<button class="btn btn-primary btn-lg btn-block">Actualizar</button>
					<a class="btn btn-outline-danger btn-block" href="{{ route('usuarios.index') }}">Regresar</a>
				</form>
			</div>
		</div>
	</div>
@endsection