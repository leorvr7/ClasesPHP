<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible"
	      content="ie=edge">
	<title>Ejercicio 1</title>
	<link rel="stylesheet" href="estilos1.css">
</head>
<body>
<h1 class="Titulo1">Ejercicio 1</h1>
<article class="num-ale">
	<h2 class="titu-ale">Numeros en Forma Aleatoria</h2>
	<ul class="lista">
		<?php
		/*Agregando el documento numeros.php*/
		require_once 'numeros.php';
		//instanciando la numeros
		$aleatorios = new \primero\numeros();

		//Generando Numeros
		$aleatorios->generar_numeros();
		//Recuperando el array y mostrandolo
		foreach ($aleatorios->getValores() as $guia => $aleatorio) {
			print "<li class='lista-menu'><a>$aleatorio</a></li>";
		}
		?>
	</ul>
</article>
<article class="caja2">
	<h2 class="titu-caja">Promedio</h2>
	<?php
	//Imprime el promedio sumando el array inicial y dividirlo con su tamaño
	print ("<p class='parrafo'>El promedio es : " . (array_sum($aleatorios->getValores())) / sizeof($aleatorios->getValores()) . "</p>");
	?>
</article>
<article class="caja2">
	<h2 class="titu-caja">Numero Menor</h2>
	<?php
	print ("<p class='parrafo'>El numero menor es: " . min($aleatorios->getValores()) . "</p>");
	?>
</article>
<article class="caja2">
	<h2 class="titu-caja">Numero Mayor</h2>
	<?php
	print ("<p class='parrafo'>El numero mayor es: " . max($aleatorios->getValores()) . "</p>");
	?>
</article>
<article class="titu-ale">
	<?php
	$multiplo = 7;
	print ("<h2 class=\"titu-caja\">Numeros multiplos de {$multiplo}</h2><ul class=\"lista\">");
	//Mostrando el vector con los multiplos de ¿?
	$aleatorios->multiplos($multiplo);
	foreach ($aleatorios->getMultiplos() as $ale) {
		print "<li class='lista-menu'><a>$ale</a></li>";
	}
	?>
	</ul>
</article>
<article>
	<h2 class="titu-ale">Numeros en Forma Ordenada</h2>
	<ul class="lista">
		<?php
		//Pasando el vector ordenado a otro vector
		$aleatorios->ordenar_pasar();

		//Mostrando en vector ordenado
		foreach ($aleatorios->getValores2() as $ale) {
			print "<li class='lista-menu'><a>$ale</a></li>";
		}
		?>
	</ul>
</article>

</body>
</html>