<?php

class Datos_Personales
{
	private $Codigo;
	private $ApellidoP;
	private $ApellidoM;
	private $Sueldo;
	private $Pnombre;
	private $Snombre;

	public function __construct($Codigo, $ApellidoP, $ApellidoM, $Pnombre, $Snombre, $Sueldo)
	{
		$this->Codigo = $Codigo;
		$this->ApellidoP = $ApellidoP;
		$this->ApellidoM = $ApellidoM;
		$this->Sueldo = $Sueldo;
		$this->Pnombre = $Pnombre;
		$this->Snombre = $Snombre;
	}

	public function getCodigo()
	{
		return $this->Codigo;
	}

	public function getApellidoP()
	{
		return $this->ApellidoP;
	}

	public function getApellidoM()
	{
		return $this->ApellidoM;
	}

	public function getSueldo()
	{
		return $this->Sueldo;
	}

	public function getPnombre()
	{
		return $this->Pnombre;
	}

	public function getSnombre()
	{
		return $this->Snombre;
	}
}