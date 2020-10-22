<?php 
//tipo de dto que puede almacenar n datos pero en vez de guardar por indice, se proporciona una llave

     $arregloColores=array(
     	"coche" => "verde",
     	"Moto" => "rojo",
     	"avion" => "azul"
     );

     //echo $arregloColores ['coche'];

    //foreach estructura de control que usa llaves de datos con indice
     foreach ($arregloColores as $key ) {
     	echo $key;
     	echo "<br>";
     }
 ?>