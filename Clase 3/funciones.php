<?php
function edad($edad)
{
	if ($edad < 0) {
		throw new PersonaEx();
	}
	return "mi edad es: {$edad}";
}

function comer($comida)
{
	if ($comida == 'grasa') {
		throw new comidaEx();
	}
	return "Comiendo: {$comida}";
}

?>