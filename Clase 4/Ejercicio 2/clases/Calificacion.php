<?php

class Calificacion
{
	private $Dt;
	private $Ht;
	private $He25;
	private $He35;
	private $He100;

	public function __construct($Dt, $Ht, $He25, $He35, $He100)
	{
		$this->Dt = $Dt;
		$this->Ht = $Ht;
		$this->He25 = $He25;
		$this->He35 = $He35;
		$this->He100 = $He100;
	}

	public function getDt()
	{
		return $this->Dt;
	}

	public function getHt()
	{
		return $this->Ht;
	}

	public function getHe25()
	{
		return $this->He25;
	}

	public function getHe35()
	{
		return $this->He35;
	}

	public function getHe100()
	{
		return $this->He100;
	}
}