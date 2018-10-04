<?php
require_once 'clases/Fechas.php';
require_once 'clases/Registro.php';
require_once 'clases/Datos_Personales.php';
require_once 'clases/trabajo.php';
require_once 'clases/Calificacion.php';
require_once 'clases/Conceptos.php';

$datos = new Datos_Personales('081195', 'Villar', 'Rodriguez', 'Leonardo', 'Ray', 2500);
$doc = new Registro('DNI', 71039953, 'ESSALUD', 'SPP PRIMA COM.', '314563LVRAV7', 'Oficina Central');
$fecha = new Fechas('12/10/2017', '20/06/2018');
$trabajo = new Trabajo('Jefatura del Desarrollo', 'Analista Programador del Sistema', 'Desarrollo');
$te = new Calificacion('0.00', '0.00', '0.00', '0.00', '0.00');
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible"
	      content="ie=edge">
	<title>Ejercicio 2</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1 class="Titulo2">Ejercicio 2</h1>
<article class="boleta">
	<nav class="Navegador">
		<article class="parte">
			<img src="descarga.png"
			     class="img-logo">
		</article>
		<article class="parte">
			<p class="titulo_se">PERUANA DE
				COMBUSTIBLES S.A.</p>
			<p class="titulo_se">RUC:
				20259033072</p>
			<p class="titulo_se">Calle Coronel
				Andrés N°360 Lima</p>
		</article>
	</nav>
	<section class="bol-fec">
		<p class="titulo_se">Boleta de Pago</p>
		<p class="titulo_se">Del 01.09.2016 al
			30.09.2016</p>
	</section>

	<section class="cuerpo-bol">
		<section class="cabeza-boleta">
			<div class="div-cab">
				<p class="titulo_se">Código</p>
				<?php
				print ("<p> {$datos->getCodigo()}</p>");
				?>
			</div>
			<div class="div-cab">
				<p class="titulo_se">Apellidos y
					Nombres</p>
				<?php
				print ("<p> {$datos->getApellidoP()} {$datos->getApellidoM()} {$datos->getPnombre()} {$datos->getSnombre()}</p>");
				?>
			</div>
			<div class="div-cab">
				<p class="titulo_se">Fecha
					Ing.</p>
				<?php
				print ("<p> {$fecha->getFechaI()}</p>");
				?>
			</div>
			<div class="div-cab">
				<p class="titulo_se">Fecha
					Cese</p>
				<?php
				print ("<p> {$fecha->getFechaS()}</p>");
				?>
			</div>
			<div class="div-cab">
				<p class="titulo_se">Sueldo</p>
				<?php
				print ("<p>S/.{$datos->getSueldo()}.00</p>");
				?>
			</div>
		</section>
		<section class="linea-2">
			<div class="div-lin2">
				<p class="titulo_se">Doc.
					Indentidad</p>
				<?php
				print ("<p>{$doc->getTipoD()} {$doc->getDNI()}</p>");
				?>
			</div>
			<div class="div-lin2">
				<p class="titulo_se">Seg.
					Salud</p>
				<?php
				print ("<p>{$doc->getSocial()}</p>");
				?>
			</div>
			<div class="div-lin2">
				<p class="titulo_se">Reg.
					Pensiones / CUSPP</p>
				<?php
				print ("<p>{$doc->getRegPen()} / {$doc->getCusp()}</p>");
				?>
			</div>
			<div class="div-lin2">
				<p class="titulo_se">Sede</p>
				<?php
				print ("<p>{$doc->getSede()}</p>");
				?>
			</div>
		</section>
		<section class="linea-3">
			<div class="div-lin3">
				<p class="titulo_se">Area</p>
				<?php
				print ("<p>{$trabajo->getArea()}</p>");
				?>
			</div>
			<div class="div-lin3">
				<p class="titulo_se">Cargo</p>
				<?php
				print ("<p>{$trabajo->getCargo()}</p>");
				?>
			</div>
		</section>
		<section class="linea-4">
			<div class="div-lin4">
				<p class="titulo_se">Centro de
					Costo (Principal)</p>
				<?php
				print ("<p>{$trabajo->getCentroCosto()}</p>");
				?>
			</div>
			<div class="div-lin4">
				<p class="titulo_se">Dias
					Trab.</p>
				<?php
				print ("<p>{$te->getDt()}</p>");
				?>
			</div>
			<div class="div-lin4">
				<p class="titulo_se">Horas
					Trab.</p>
				<?php
				print ("<p>{$te->getHt()}</p>");
				?>
			</div>
			<div class="div-lin4">
				<p class="titulo_se">H.Ex.25%</p>
				<?php
				print ("<p>{$te->getHe25()}</p>");
				?>
			</div>
			<div class="div-lin4">
				<p class="titulo_se">H.Ex.35%</p>
				<?php
				print ("<p>{$te->getHe35()}</p>");
				?>
			</div>
			<div class="div-lin4">
				<p class="titulo_se">H.Ex.100%</p>
				<?php
				print ("<p>{$te->getHe100()}</p>");
				?>
			</div>
		</section>
		<section class="linea-5">
			<div class="div-lin5">
				<p class="titulo_se">
					Calificación</p>
				<?php
				print ("<p>Fiscalizable</p>");
				?>
			</div>
			<div class="div-lin5">
				<p class="titulo_se">Ini.Vac.1</p>
			</div>
			<div class="div-lin5">
				<p class="titulo_se">Fin.Vac.1</p>
			</div>
			<div class="div-lin5">
				<p class="titulo_se">Ini.Vac.2</p>
			</div>
			<div class="div-lin5">
				<p class="titulo_se">Fin.Vac.2</p>
			</div>
			<div class="div-lin5">
				<p class="titulo_se">Ini.Vac.3</p>
			</div>
			<div class="div-lin5">
				<p class="titulo_se">Fin.Vac.3</p>
			</div>
		</section>
</article>

<article class="cuerpo-boleta">
	<div class="cabecera">
		<p class="titulo_se">CC-N</p>
	</div>
	<div class="cabecera">
		<p class="titulo_se">Concepto</p>
	</div>
	<div class="cabecera">
		<p class="titulo_se">Cantidad</p>
	</div>
	<div class="cabecera">
		<p class="titulo_se">Ingresos</p>
	</div>
	<div class="cabecera">
		<p class="titulo_se">Descuentos</p>
	</div>
	<div class="cabecera">
		<p class="titulo_se">Aportes</p>
	</div>
	<?php
	$primero = new Conceptos(1000, 'Remuneracion Mensual', 0, 3683.33, 0, 0);
	$segundo = new Conceptos(1001, 'Asignacion Familiar', 0, 566.67, 0, 0);
	$tercero = new Conceptos(1526, 'Vacaciones', 0, 85.00, 0, 0);
	$cuarto = new Conceptos(5000, 'Renta de 5ta', 0, 0, 295.95, 0);
	$quinto = new Conceptos(5011, 'AFP Comision Regular', 0, 0, 51.59, 0);
	$sexto = new Conceptos(5012, 'AFP Aport. Obligatorio', 0, 0, 433.50, 0);
	$septimo = new Conceptos(5013, 'AFP Seguro Regular', 0, 0, 57.66, 0);
	$octavo = new Conceptos(5032, 'Dscto Convenio ScotiaBank', 0, 0, 1061.06, 0);
	$noveno = new Conceptos(9008, 'ESsalud', 0, 0, 0, 390.15);
	?>
</article>

<?php
$suma1 = $primero->getIngresos() + $segundo->getIngresos() + $tercero->getIngresos() + $cuarto->getIngresos() + $quinto->getIngresos() + $sexto->getIngresos() + $septimo->getIngresos() + $octavo->getIngresos() + $noveno->getIngresos();

$suma2 = $primero->getDescuentos() + $segundo->getDescuentos() + $tercero->getDescuentos() + $cuarto->getDescuentos() + $quinto->getDescuentos() + $sexto->getDescuentos() + $septimo->getDescuentos() + $octavo->getDescuentos() + $noveno->getDescuentos();

$suma3 = $primero->getAportes() + $segundo->getAportes() + $tercero->getAportes() + $cuarto->getAportes() + $quinto->getAportes() + $sexto->getAportes() + $septimo->getAportes() + $octavo->getAportes() + $noveno->getAportes();

$sumaf=$suma1-$suma2;
?>

<section class="footer">
	<div class="footer1">
		<p class="titulo_se">Total S/.</p>
	</div>
	<div class="footer1">
		<p class="footer1-text"><?php print ("{$suma1}")?></p>
	</div>
	<div class="footer1">
		<p class="footer1-text"><?php print ("{$suma2}")?></p>
	</div>
	<div class="footer1">
		<p class="footer1-text"><?php print ("{$suma3}")?></p>
	</div>
</section>
<section class="footer">
	<div class="footer2">
		<p class="titulo_se">Neto a Pagar S/.</p>
	</div>
	<div class="footer2">
		<p class="footer2-text"><?php print ("{$sumaf}")?></p>
	</div>
	<div class="footer2">
		<p class="footer2-text"></p>
	</div>
</section>
</body>
</html>