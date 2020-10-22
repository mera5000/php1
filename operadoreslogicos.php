<?php 
    //lo operadores logicos siren para validar expresiones, tal es el caso del operador or que sirve para validar y and sirve para validar ambas sentencias


  $edadvalida=17;
      if ($edadvalida >18 and $edadvalida< 26) {
            echo "edad valida";	   
      
      } else {
      	//echo "Edad no valida";
      }
           

    $sexo="F";

    if($sexo== "M" or $sexo =="F"){
            //echo "sexo valido";
    }
    //el operador de diferente ! sirve para validar que un dato que no corresponda a la cantidad o caracter
    $dato=10;

    if($dato != 10){
    	//echo "es un dato bueno"
    }

    //la negacion sirve para validar algo que no ocurre
    $dato2=false;
    if(!$dato2){
    	echo "no es verdadero";
    }
 ?>
