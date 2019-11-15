<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Enviado</title>
</head>
<body>
	@if($orden->status == true)
	<p><h1 class="text-justify">Hola <u>{{ $orden->cliente['nombre'] }}</u> hemos concluido tu orden puedes pasar a recoger tu Equipo <u>con tu número de orden</u> de Lunes a Viernes de 10:00 a 19:00.</h1></p>
	<table>
		<tr>
			<th align="left">Número de Orden:</th>
			<td>{{ $orden['id'] }}</td>
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
		<tr>
			<th class="left">Fecha de Entrega:</th>
			<td>{{ date('d/m/Y') }}</td>
		</tr>
	</table>
	@else
	<h1>Esto es embarasoso para nosotros le pedimos una cordial disculpa, su equipo se encuentra en estado de reparación, nos pondremos en contacto con usted cuando su equipo este al 100%</h1>
	@endif
</body>
</html>