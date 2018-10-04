<?php

class Trabajo
{
	private $Area;
	private $Cargo;
	private $Centro_Costo;

	public function __construct($Area, $Cargo, $Centro_Costo)
	{
		$this->Area = $Area;
		$this->Cargo = $Cargo;
		$this->Centro_Costo = $Centro_Costo;
	}

	public function getArea()
	{
		return $this->Area;
	}

	public function getCargo()
	{
		return $this->Cargo;
	}

	public function getCentroCosto()
	{
		return $this->Centro_Costo;
	}

}