<?php

class Auto
{
	var $color;
	var $modelo;

	function __construct($p_color, $p_modelo)
	{
		$this->color = $p_color;
		$this->modelo = $p_modelo;
	}

	function imprimir()
	{
		print ("<h3>Impresion de Auto</h3>");
		print "Color: " . $this->color;
		print ("<br>");
		print "Color: " . $this->modelo;
		print ("<br>");
	}
}

$auto1 = new Auto('Rojo', 'Audi');
$auto2 = new  Auto('Azul', 'Toyota');

print ("<br>");
$auto1->imprimir();
$auto2->imprimir();

?>