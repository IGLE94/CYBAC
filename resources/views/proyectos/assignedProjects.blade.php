@extends('layout')

@section('title', 'Asignar Proyecto')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto px-5">

			<form class="bg-white shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('assignProject', $proyecto->id) }}">
				@method('PUT')
				@csrf

				<h1 class="display-5 text-center"><b>Asignar Proyecto</b></h1>

				@foreach($users as $id => $name)
					<div class="checkbox">
						<label>
							<input id="user" type="checkbox" name="users">
							{{ $name }}
						</label>
					</div>
				@endforeach

				<button class="btn btn-primary btn-lg btn-block">Asignar</button>
				<a class="btn btn-outline-danger btn-block" href="{{ route('proyectos.index') }}">Regresar</a>
			</form>

		</div>
	</div>
</div>
@endsection