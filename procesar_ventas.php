<?php

require 'config/conex.php';


$cantidad = $_POST['txt_cantidad'];
$total = 1500 * $cantidad;


$sql = " INSERT INTO ventas(valor) VALUES ($total)";


if ($dbh->query($sql))
{
    //aparecera este mensaje
echo "ventas registrada".$total;
}else
{
    //Error aparece esto
    echo "Erroren la venta";

}

?>