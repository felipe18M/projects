<?php

echo"<h1>Programa Mayor y Menor de 2 Numeros</h1><br>";
    
    	//inicia el subprograma mayor y menor de 2 numeros
        $a = 3;
        $b = 2;
       
        //variable float para numeros no enteros 
        
        echo"mayor y menor de 2 numeros\n";//echo muestra en pantalla
        echo "numero 1";
        echo " $a";//da valor a la variable float
        echo"numero 2";
        echo "$b";//da valor a la variable float
         //inicia sentencia if


        if ($a<$b){//ejecut$a la condicion si a es menor que b
        echo "numero menor:$a<br>";
        }
        if($b<$a){//ejecuta la condicion si b es menor que a
        echo "numero menor:$b<br>";
        }
        if ($a>$b){//ejecuta la condicion si a es mayor que b
        echo" numero mayor:$a";
        }
        if ($b>$a){//ejecuta la condicion si b es mayor que a
        echo"numero mayor:$b";}
        
        if ($a==$b && $b==$a){//ejecuta la condicion A es igual B y B es igual a
        echo"el numero 1 y 2 son igual:$a";}
        
	


?>