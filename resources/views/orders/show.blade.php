@extends('layout')

@section('content')
	<div class="container">
		<div class="bg-white p-5 shadow rounded">
			<h1>Mensaje</h1>

			<p class="lead">Enviado por {{ $order->id }}</p>
			<p class="text-black-50">{{ $order->created_at->diffForHumans() }}</p>

			<div class="d-flex justify-content-between align-items-center">
				<a class="btn btn-success" href="{{ route('ordenes.index') }}">Regresar</a>

				@auth
					<div class="btn-group btn-group-sm">
						<a class="btn btn-info" href="{{ route('ordenes.edit', $order) }}">Editar</a>

						<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-order').submit()">Eliminar</a>

						<form 
							id="delete-order" 
							class="d-none" 
							method="POST" 
							action="{{ route('ordenes.destroy', $order) }}">
							@csrf
							@method('DELETE')
						</form>
					</div>
				@endauth
			</div>
		</div>
	</div>
@endsection