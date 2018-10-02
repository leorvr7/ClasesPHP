<?php

interface Menu_Interface
{
	public function insertar();

	public function registrar();

	public function modificar();

	public function eliminar();

	public function obtener();
}

class Menu implements Menu_Interface
{

	public function insertar()
	{
		print "<li class='lista-menu'><a class='lista-menu-link' href='#'>Insertar</a></li>";
	}

	public function registrar()
	{
		print "<li class='lista-menu'><a class='lista-menu-link' href='#'>Registrar</a></li>";
	}

	public function modificar()
	{
		print "<li class='lista-menu'><a class='lista-menu-link' href='#'>Modificar</a></li>";
	}

	public function eliminar()
	{
		print "<li class='lista-menu'><a class='lista-menu-link' href='#'>Eliminar</a></li>";
	}

	public function obtener()
	{
		print "<li class='lista-menu'><a class='lista-menu-link' href='#'>Obtener</a></li>";
	}
}

?>