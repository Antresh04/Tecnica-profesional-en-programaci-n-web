<?php
require "conexion.php";
//datos del formulario
$nombre = $_POST ['nombre'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$total1 = ($nota1 * 0.30) + ($nota2 * 0.30) + ($nota3 * 0.40);

$sql = "INSERT INTO camilo

(
nombre,
nota1,
nota2,
nota3,
total
)

VALUES (
'$nombre',
'$nota1',
'$nota2',
'$nota3',
'$total'

)";

if($dbh->query($sql))
{echo "Nota registrada correctamente";

}

else
{
    echo "error actualizacion persona";
}
?>