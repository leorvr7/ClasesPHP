<?php

class Fabrica
{
	public function FabricarMesa($p_color, $p_numero)
	{
		return new Class($p_color, $p_numero)
		{
			private $color;
			private $patas;

			public function __construct($p_color, $p_numero)
			{
				$this->color = $p_color;
				$this->patas = $p_numero;
			}

			public function getColor()
			{
				return $this->color;
			}

			public function getPatas(){
				return $this->patas;
			}
		};
	}
}

$fabrica = new Fabrica();

$mesa = $fabrica->FabricarMesa('Marron',4);
$mesa2=$fabrica->FabricarMesa('Verde',4);
print ("<br>");
echo ("La mesa 1 es de Color: " .
	$mesa->getColor() . "Y tiene " .
	$mesa->getPatas() . " patas.");
print ("<br>");
echo ("La mesa 2 es de Color: " .
	$mesa2->getColor() . "Y tiene " .
	$mesa2->getPatas() . " patas.");

?>