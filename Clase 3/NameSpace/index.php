<?php
require_once 'cecomp/estudiante.php';
require_once 'Universidad/estudiante.php';

use cecomp\estudiante as primero;
use universidad\estudiante as segundo;

$estudiante = new primero('Diana');
$estudiante2= new segundo('Leon');
echo $estudiante->Saludar();
echo $estudiante2->Saludar();

?>