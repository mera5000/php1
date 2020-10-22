<?php 

$var="Alberto Rendon Mera";
$fecha="01-05-2020";
//explode es una funcion que convierte un string a un arreglo dependientdo de la construccion pedida.

$datos=explode(" ", $var);
$f=explode("-", $fecha);

echo "El mes de la chefa es: ".$f[1];

 ?>