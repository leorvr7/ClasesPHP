<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible"
	      content="ie=edge">
	<link rel="stylesheet" href="estilos1.css">
	<title>Document</title>
</head>
<body>
<?php

class Empleado
{
	public $nombre;
	public $sueldo;

	public function __construct($p_nombre, $p_sueldo)
	{
		$this->nombre = $p_nombre;
		$this->sueldo = $p_sueldo;
	}

	public function mensaje()
	{
		echo("<li class='listado'>");
		echo("Su nombre es: {$this->nombre} ");
		if ($this->sueldo < 5000) {
			echo("y no pagara impuesto");
		} else {
			echo("si pagara impuesto");
		}
		print ("</li>");

	}
}

$leo = new Empleado('Leonardo', 5000);
$andre = new Empleado('Andre', 6000);
$miguel = new Empleado('Miguel', 2500);
$angelica = new Empleado('Angelica', 1000);
$jose = new Empleado('Jose', 2000);

print ("<ul class='lista-menu'>");
$leo->mensaje();
$andre->mensaje();
$miguel->mensaje();
$angelica->mensaje();
$jose->mensaje();
print ("</ul>");

?>
</body>
</html>
