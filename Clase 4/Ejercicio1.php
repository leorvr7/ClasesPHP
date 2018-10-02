<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible"
	      content="ie=edge">
	<title>Document</title>
</head>
<body>
<?php
$valores = array();
const cantidad = 20;
for ($i = 0; $i < cantidad; $i++) {
	$valores[] = rand(1, 10000);
}
print ("<ul>");
foreach ($valores as $clave => $valor) {
	print ("<li>Número {$clave}: {$valor}</li>");
}
print ("</ul>");
$promedio=(array_sum($valores))/cantidad;
asort($valores);
foreach ($valores as $clave => $valor) {
	print ("<li>Número {$clave}: {$valor}</li>");
}
?>
</body>
</html>
