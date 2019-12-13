@extends('layout')

@section('title', 'Asignar Proyecto')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto px-5">

			<form class="bg-white shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('assignUser', $proyecto->id) }}">
				@method('PUT')
				@csrf

				<p><h1 align="center"><b>Proyecto: {{ $proyecto->id }}</b></h1></p>

				<div class="form-group">
				@foreach($usuarios as $id => $name)
					<div class="checkbox">
						<label>
							<input
								type="checkbox"
								value="{{ $id }}"
								{{ $proyecto->users()->pluck('id')->contains($id) ? 'checked' : '' }}
								name="usuarios[]">
							{{ $name }}
						</label>
					</div>
				@endforeach
				{!! $errors->first('usuarios', '<span class=error><strong>:message</strong></span>') !!}
				</div>

				<button class="btn btn-primary btn-lg btn-block">Actualizar</button>
				<a class="btn btn-outline-danger btn-block" href="{{ route('proyectos.index') }}">Regresar</a>
			</form>

		</div>
	</div>
</div>
@endsection