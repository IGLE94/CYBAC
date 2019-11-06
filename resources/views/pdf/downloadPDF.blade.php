<!DOCTYPE html>
<html>
<head>
	<title>Download PDF</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<div class="container">
		<div class="bg-white p-5 shadow rounded">

			<p><center><strong>Grupo CYBAC</strong></center></p>
			<br>
			<table class="table">
				<tr>
					<th>Número de orden:</th>
					<td>{{ $order->id }}</td>	
				</tr>
				<tr>
					<th>Cliente:</th>
					<td>{{ $order->cliente->nombre }} {{ $order->cliente->paterno}} {{ $order->cliente->materno}}</td>
				</tr>
				<tr>
					<th>Tel. Celular:</th>
					<td>{{ $order->cliente->telefono }}</td>
				</tr>
				<tr>
					<th>Email:</th>
					<td>{{ $order->cliente->email }}</td>
				</tr>
				<tr>
					<th>Tipo de servicio:</th>
					<td>{{ $order->servicio->servicio }}</td>
				</tr>
				<tr>
					<th>Equipo:</th>
					<td>{{ $order->equipo->equipo }}</td>
				</tr>
				<tr>
					<th>Marca:</th>
					<td>{{ $order->equipo->marca }}</td>
				</tr>
				<tr>
					<th>Modelo:</th>
					<td>{{ $order->equipo->modelo }}</td>
				</tr>
				<tr>
					<th>Número de serie:</th>
					<td>{{ $order->equipo->serie }}</td>
				</tr>
				<tr>
					<th>Descripción:</th>
					<td>{{ $order->descripcion }}</td>
				</tr>
				<tr>
					<th>Costo del Servicio:</th>
					<td>${{ $order->costoServicio }}</td>
				</tr>
			</table>

		</div>
	</div>

</body>
</html>
	