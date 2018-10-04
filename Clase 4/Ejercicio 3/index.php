<?php

$mysqli = new mysqli('127.0.0.1','root','','rufian');

if ($mysqli->connect_error)
{
    echo "Error de Conexion: " .$mysqli->connect_error();
}

$resultado = $mysqli->query('SELECT id,nombre_estado FROM estados');

echo '<select>';

while ( $fila = $resultado->fetch_assoc())
{
    echo "<option value= '" . $fila['id'] . "'> "  .
            $fila['nombre_estado'] . "</option>";
}

echo '</select>';

$resultado->free();
$mysqli->close();
?>