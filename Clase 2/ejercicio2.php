<!doctype html>
<html lang="es">
<head>
	<meta charset="}">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible"
	      content="ie=edge">
	<link rel="stylesheet" href="estilos2.css">
	<title>Document</title>
</head>
<body>
<?php
include 'menu.php';
$menu = new Menu();

print "<ul class='menu'>";
print "
{$menu->registrar()}
{$menu->insertar()}
{$menu->obtener()}
{$menu->modificar()}
{$menu->eliminar()}";
print "</ul>";
?>
</body>
</html>
