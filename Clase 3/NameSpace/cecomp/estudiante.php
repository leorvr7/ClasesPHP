<?php
namespace cecomp;
class estudiante
{
	private $nombre;

	function __construct($value)
	{
		$this->nombre = $value;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function Saludar()
	{
		print "Hola mi nombre es: {$this->nombre} y soy del NameSpace Cecomp";
		print ("<br>");
	}
}

?>