<?php
$cantidad= $_POST ["txt_cantidad"];
$tipo= $_POST["tipo"];
if($cantidad <=0)
{
    echo "ha digitado un valor incorrecto";
    exit;
}

if($tipo==1)
{
    $valor= 3000;
    $subtotal= $valor*$cantidad;
    if(subtotal>50000)
    {
    $final= $subtotal-($subtotal*0.15);
}else{
    echo $subtotal;



    if($tipo==2)
    {
        $valor= 3500;
        $subtotal= $valor*$cantidad;
        if(subtotal>50000)
        {
        $final= $subtotal-($subtotal*0.15);
    }else{
        echo $subtotal;

        if($tipo==3)
    {
        $valor= 4000;
        $subtotal= $valor*$cantidad;
        if(subtotal>50000)
        {
        $final= $subtotal-($subtotal*0.15);
    }else{
        echo $subtotal;
    }