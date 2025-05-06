<?php
require "config/conex.php";

$cod      = intval($_POST["cod"]);
$cantidad = intval($_POST["cantidad"]);
$valor    = floatval($_POST["valor"]);
$total    = $cantidad * $valor;

$sql = "
  UPDATE ventas
    SET cantidad = $cantidad,
        valor    = $valor,
        total    = $total
  WHERE id = $cod
";

if ($dbh->query($sql)) 
{
    echo "Persona actualizada correctamente ahora se mostrara cantidad" ;
} else {
    echo "Error actualizando persona: " . $dbh->errorInfo()[2];
}