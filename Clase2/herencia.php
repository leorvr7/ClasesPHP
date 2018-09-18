<?php

class Papa
{
	public $nombre = 'Leonardo';
	public $apellidos = 'Villar Rodriguez';
	private $edad = 60;

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

$hija = new Hijo('Diana Violeta');
$hija->setEdad(22);

echo "Mi nombre es: {$hija->nombre} y mi apellido es {$hija->apellidos} y tengo {$hija->getEdad()}";

?>

<?php

interface AutomovilInterface
{
	public function getTipo();

	public function getColor();

	public function getMarca();
}

class Mercedes implements AutomovilInterface
{
	public function getColor()
	{
		echo "Sedan";
	}

	public function getMarca()
	{
		echo "Rojo";
	}

	public function getTipo()
	{
		echo "2015";
	}
}

$carro = new Mercedes();
print ("<br>");
$carro->getColor();
print ("<br>");
$carro->getMarca();
print ("<br>");
$carro->getTipo();
print ("<br>");
?>
