<?php

class Factura
{
	const impuesto = 18;
	public $importe_base;
	public $fecha;
	public $impuestos;
	public $importe_bruto;
	public $estado;

	public function __construct($bruto, $estado)
	{
		$impuesto = self::impuesto;
		$this->importe_bruto = $bruto;
		$this->fecha = date(DATE_RFC2822);
		$this->estado = $estado;
		$this->importe_base = ($bruto / (($impuesto + 100) / 100));
		$this->impuestos = $bruto - ($bruto / (($impuesto + 100) / 100));
	}

	public function imprimir()
	{
		print "<div class='contenedor'>";
		print "<p class='contenedor-item'>Importe Base es: {$this->importe_base}</p>";
		print "<p class='contenedor-item'>Los impuestos son: {$this->impuestos}</p>";
		print "<p class='contenedor-item'>El importe Bruto es: {$this->importe_bruto}</p>";
		print "<p class='contenedor-item'>La fecha es: {$this->fecha}</p>";
		print "<p class='contenedor-item'>El estado es: {$this->estado}</p>";
		print "</div>";
	}
}

?>