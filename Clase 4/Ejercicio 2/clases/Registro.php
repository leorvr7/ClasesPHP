<?php

class Registro
{
	private $DNI;
	private $Social;
	private $RegPen;
	private $Cusp;
	private $Sede;
	private $TipoD;

	public function __construct($TipoD, $DNI, $Social, $RegPen, $Cusp, $Sede)
	{
		$this->DNI = $DNI;
		$this->Social = $Social;
		$this->RegPen = $RegPen;
		$this->Cusp = $Cusp;
		$this->Sede = $Sede;
		$this->TipoD = $TipoD;

	}

	public function getDNI()
	{
		return $this->DNI;
	}

	public function getSocial()
	{
		return $this->Social;
	}

	public function getRegPen()
	{
		return $this->RegPen;
	}

	public function getCusp()
	{
		return $this->Cusp;
	}

	public function getSede()
	{
		return $this->Sede;
	}

	public function getTipoD()
	{
		return $this->TipoD;
	}
}