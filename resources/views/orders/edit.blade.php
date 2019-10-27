@extends('layout')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				
				<form class="bg-white shadow rounded py-3 px-4"
					method="POST" 
					action="{{ route('ordenes.update', $order->id ) }}">
					
					{!! method_field('PUT') !!}
					@csrf

					<h1 class="display-4">Editar {{ $order->id}}</h1>

					<hr>
					<p>
					<label for="tipoServicio">Tipo de Servicio:</label>
						<select id="tipoServicio" class="form-control" name="tipoServicio">
							<option selected>{{ $order->tipoServicio }}</option>
							<option>Gratis</option>
							<option>Manual</option>
						</select>
					</p>
					<p>
					<input class="btn btn-primary btn-lg btn-block" type="submit" name="agregar" value="Actualizar">
					</p>
					<p>
					<a class="btn btn-outline-danger btn-block" href="{{ route('ordenes.index') }}">Cancelar</a>
					</p>
				</form>
			</div>
		</div>
	</div>
@endsection
