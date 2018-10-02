<?php

namespace primero;


class numeros
{
	private $valores = [];
	private $valores2 = [];
	private $multiplos = [];
	const cantidad = 20;

	public function generar_numeros()
	{
		for ($i = 0; $i < self::cantidad; $i++) {
			$this->valores[] = rand(1, 10000);
		}
	}

	public function ordenar_pasar()
	{
		asort($this->valores);
		foreach ($this->valores as $val)
			$this->valores2[] = $val;
		ksort($this->valores);
	}

	public function multiplos(int $multi)
	{
		foreach ($this->valores as $clave => $valor) {
			if ($valor % $multi == 0) {
				$this->multiplos[] = $valor;
			}
		}
	}

	public function getValores(): array
	{
		return $this->valores;
	}

	public function getValores2(): array
	{
		return $this->valores2;
	}

	public function getMultiplos(): array
	{
		return $this->multiplos;
	}
}