<?php 
    
//es un tipo de dato  que pouede contener n datos apartir de un almacenamiento
    $arreglo=array ();
    $arreglo [0]="juan";
    $arreglo [1]= 10;
    $arreglo [2]="falcultad";
    $arreglo [3]="Mera 5000";


    echo count ($arreglo);
    
    for ($i=0; $i < count($arreglo); $i++) { 
    	echo $arreglo[$i];
    	echo "<br>";

    	if ($arreglo[$i]=='Mera 5000') {
    		echo "el ganador";
    		echo "<br>";
    	} else {
    		
    	}
    	
    }

 ?>