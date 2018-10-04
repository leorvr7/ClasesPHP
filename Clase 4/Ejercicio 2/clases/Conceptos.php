<?php

class Conceptos
{
	private $Ccn;
	private $Concepto;
	private $Cantidad;
	private $Ingresos;
	private $Descuentos;
	private $Aportes;

	public function __construct($Ccn, $Concepto, $Cantidad, $Ingresos, $Descuentos, $Aportes)
	{
		$this->Ccn = $Ccn;
		$this->Concepto = $Concepto;
		$this->Cantidad = $Cantidad;
		$this->Ingresos = $Ingresos;
		$this->Descuentos = $Descuentos;
		$this->Aportes = $Aportes;
		$this->ingreso();
	}

	public function ingreso()
	{
		print ("<div class='rufian1'>");
		print ("<p>{$this->Ccn}</p>");
		print ("</div>");
		print ("<div class='rufian2'>");
		print ("<p>{$this->Concepto}</p>");
		print ("</div>");
		print ("<div class='rufian3'>");
		print ("<p>{$this->Cantidad}</p>");
		print ("</div>");
		print ("<div class='rufian4'>");
		print ("<p>{$this->Ingresos}</p>");
		print ("</div>");
		print ("<div class='rufian5'>");
		print ("<p>{$this->Descuentos}</p>");
		print ("</div>");
		print ("<div class='rufian6'>");
		print ("<p>{$this->Aportes}</p>");
		print ("</div>");
	}

	public function getIngresos()
	{
		return $this->Ingresos;
	}

	public function getDescuentos()
	{
		return $this->Descuentos;
	}

	public function getAportes()
	{
		return $this->Aportes;
	}

}