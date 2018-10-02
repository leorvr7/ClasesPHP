<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible"
	      content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="css.css">
</head>
<body>
<?php
function ejemplo_get_args_php5()
{
	$nombres = func_get_args();
	echo "<ul>";
	foreach ($nombres as $nombre) {
		print "<li>" . " $nombre " . "</li>";
	}
	echo "</ul>";
}

function ejemplo_get_args_php7(String...$nombres)
{
	echo "<ul>";
	foreach ($nombres as $nombre) {
		print "<li>" . " $nombre " . "</li>";
	}
	echo "</ul>";
}

echo ejemplo_get_args_php7("Leo", 'Ray');

echo ejemplo_get_args_php5('Leo', 'Rufian');

?>

<?php
function suma_numeros(int...$numeros)
{
	return array_sum($numeros);
}

echo suma_numeros(1, 2, 3, 4);

?>

<?php
require_once 'Excepciones.php';
require_once 'funciones.php';
?>

<?php
try {
	echo "<div> ";
	echo "<h1 class='nombresito'> Ejemplo Excepcion </h1>";
	print ("<br>");
	echo comer('manzana');
	print ("<br>");
	echo edad(5);
	print ("<br>");

	echo comer('grasa');
	print "</div>";
} catch (PersonaEx $e) {
	echo $e->getMessage();
} catch (comidaEx $e) {
	echo $e->getMessage();
} finally {
	echo "Termino de Try Catch";
}
print ("<br>");
?>

<?php
require_once 'gato.php';
$gato = new gato();
echo $gato->tocar();
print ("<br>");
echo $gato->tocar_doble();
?>

<?php

?>

</body>
</html>