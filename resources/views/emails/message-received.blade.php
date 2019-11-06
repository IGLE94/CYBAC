<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Enviado</title>
</head>
<body>
	<p><h1>Hola <u>{{ $orden->cliente['nombre'] }}</u> hemos registrado tu orden correctamente</h1></p>
	<table>
		<tr>
			<th align="left">Recibiste la orden:</th>
			<td>{{ $orden['id'] }}</td>
		</tr>
		<tr>
			<th align="left">Descripción:</th>
			<td>{{ $orden['descripcion'] }}</td>
		</tr>
		<tr>
			<th align="left">Equipo:</th>
			<td>{{ $orden->equipo['equipo'] }}</td>
		</tr>
		<tr>
			<th align="left">Marca:</th>
			<td>{{ $orden->equipo['marca']}}</td>
		</tr>
		<tr>
			<th align="left">Modelo:</th>
			<td>{{ $orden->equipo['modelo'] }}</td>
		</tr>
		<tr>
			<th align="left">Número de serie:</th>
			<td>{{ $orden->equipo['serie'] }}</td>
		</tr>
		<tr>
			<th class="left">Fecha de recepción:</th>
			<td>{{ $orden->created_at->format('d/m/Y') }}</td>
		</tr>
	</table>
</body>
</html>