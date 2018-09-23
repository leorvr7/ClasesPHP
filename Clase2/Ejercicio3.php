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
include 'Factura.php';
$factura1 = new Factura(5000, 'Pagado');
$factura2 = new Factura(7500, 'Deuda');
$factura3=new Factura(15690,'Pagado');
$factura4=new Factura(10000,'Deuda');
$factura1->imprimir();
$factura2->imprimir();
$factura3->imprimir();
$factura4->imprimir();
?>

<?php

?>
</body>
</html>