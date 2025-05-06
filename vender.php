<?php
//paso 1, importarel archivo que encagara de conectarse
require 'config/conex.php';

$venta=$_POST["vender"];
$valor=$venta*1000;
$total=$valor;

$sql="INSERT INTO ventas(cantidad,valor,total)values(".$venta.",".$valor.",".$total.")";


if($dbh-> query ($sql))
{
    echo "persona actulizada correctamente";
}else
{
    echo "error_actulizando_persona";
}

