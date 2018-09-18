<?php

class Papa
{
	public $nombre = 'Leonardo';
	public $apellidos = 'Villar Rodriguez';
	private $edad = 60;
	const genero='Masculino';

	public function setEdad($value)
	{
		$this->edad = $value;
	}

	public function getEdad()
	{
		return $this->edad;
	}
}

class Hijo extends Papa
{
	function __construct($p_nombre)
	{
		$this->nombre = $p_nombre;
	}
}

class Familia
{
	public function miembro(Hijo $hijo)
	{
		echo $hijo->nombre;
		print ("<br>");
		echo $hijo->getEdad();
	}
}

$hija = new Hijo('Diana Violeta');
$hija->setEdad(22);

$familia = new Familia();
$familia->miembro($hija);

$papa=new Papa();

echo 'Mi genero es: ' . $papa::genero;
print ("<br>");

echo "Mi nobre es: {$hija->nombre} y mi apellido es {$hija->apellidos} y tengo {$hija->getEdad()}";

?>