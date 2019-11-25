@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto px-5">
			
			<form class="bg-white shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('empresas.update', $empresa->id) }}">
				@method('PUT')
				@csrf

				<p><h1 align="center"><b>Editar Empresa: {{ $empresa->nombre }}</b></h1></p>
				
				@include('empresas.form')

				<button class="btn btn-primary btn-lg btn-block">Actualizar</button>
				<a class="btn btn-outline-danger btn-block" href="{{ route('empresas.index') }}">Regresar</a>
			</form>

		</div>
	</div>
</div>
@endsection