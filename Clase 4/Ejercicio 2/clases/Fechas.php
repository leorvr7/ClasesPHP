<?php

class Fechas
{
	private $fecha_i;
	private $fecha_s;
	public function __construct($fecha_i,$fecha_s)
	{
		$this->fecha_i=$fecha_i;
		$this->fecha_s=$fecha_s;
	}

	public function getFechaI()
	{
		return $this->fecha_i;
	}

	public function getFechaS()
	{
		return $this->fecha_s;
	}
}