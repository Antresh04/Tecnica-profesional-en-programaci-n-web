<? php

//crear conexion a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "notas");

//verificar si la conexión fue exitosa
if (!$conexion){
    echo "error al conectar con la base de datos";
    exit();
}
?>

