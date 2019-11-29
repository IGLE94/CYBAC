@extends('layout')

@section('title', 'Asignar Proyecto de Desarrollo')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto px-5">
		{{-- @include('partials.navProjects')	 --}}
			<form class="bg-white shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('assignUserDesarrollo', $desarrollo->id) }}">
				
				@method('PUT')
				@csrf

				<h1 class="display-4"><b>Asignar Usuario</b></h1>
				<hr>

				@foreach($usuarios as $id => $name)
					<div class="form-group checkbox">
						<label>
							<input 
								type="checkbox" 
								value="{{ $id }}" 
								{{ $desarrollo->users()->pluck('id')->contains($id) ? 'checked' : '' }}
								name="usuarios[]">
							{{ $name }}
						</label>
					</div>
				@endforeach
				{!! $errors->first('usuarios', '<span class=error><strong>:message</strong></span>') !!}
				<hr>

				<button class="btn btn-primary btn-lg btn-block">Guardar</button>
				<a class="btn btn-outline-danger btn-block" href="{{ route('desarrollos.index') }}">Regresar</a>
			</form>
		</div>	
	</div>	
</div>
@endsection