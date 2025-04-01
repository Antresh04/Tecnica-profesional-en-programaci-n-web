<?php
$cantidad=$_POST["txt_cantidad"];
$tipo=$_POST["tipo"];
$chispas= $_POST["chispitas"];
$lugar= $_POST["lugar"];
//echo $tipo;
if($tipo=="a")
{   
    $valor=6000;
    $subtotal=$valor*$cantidad;
    //print $subtotal;
    if($chispas==1)
    { 
    $chispas= $cantidad * 2000;
    $subtotal= $subtotal + $chispas;
    } else{
        //print $subtotal;
    }
    if($lugar==2)
     {
        $lugar=$cantidad*1000;
        $subtotal=$subtotal+$lugar;
     }else{
        //print $subtotal;
     }
     
}
if($tipo=="b")
{   
    $valor=10000;
    $subtotal=$valor*$cantidad;
    //print $subtotal;
    if($chispas==1)
    { 
    $chispas= $cantidad * 2000;
    $subtotal= $subtotal + $chispas;
    } else{
        //print $subtotal;
    }
    if($lugar==2)
     {
        $lugar=$cantidad*1000;
        $subtotal=$subtotal+$lugar;
     }else{
        //print $subtotal;
     }
    
}
if($tipo=="c")
{   
    $valor=20000;
    $subtotal=$valor*$cantidad;
    //print $subtotal;
    if($chispas==1)
    { 
     $chispas= $cantidad * 2000;
     $subtotal= $subtotal + $chispas;
    } else{
        //print$subtotal;
    }
    if($lugar==2)
     {
        $lugar=$cantidad*1000;
        $subtotal=$subtotal+$lugar;
     }else{
        //print $subtotal;
     }
     
}
echo "total a pagar es: " . $subtotal;
?>