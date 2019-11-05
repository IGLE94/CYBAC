<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Enviado</title>
</head>
<body>
	<p><strong>Recibiste la orden:</strong> {{ $orden['id'] }}</p>
	<p><strong>Costo del Servicio:</strong> {{ $orden['costoServicio'] }}</p>
	<p><strong>Cliente:</strong> {{ $orden->cliente['nombre'] }}</p>
</body>
</html>