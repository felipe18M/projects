<?php
  
        $n1 = 3; 
        $n2 = 5; 
        $n3 = 6;//variables
           echo"\n<h2>----------MENOR  INTERMEDIO Y MAYOR DE 3 NUMEROS----------\n</h2>";
           echo"primer numero: \n$n1<br>";//valor a ingresar por teclado
           echo"segundo numero:\n$n2<br>";//valor a ingresar por teclado
           echo"tercer numero: \n$n3<br>";//valor a ingresar por teclado
           //inicia condicional if para obtener mayor menor e intermedio 
             
            if($n1 == $n2 and $n2==$n3){//si todos son iguales los valores 
               echo"los tres numeros son iguales:\n$n1,$n2 y $n3"; //valores escrito por teclado n1,n2 y n3
   
            }
            
            else if ($n1 == $n2 ){                          
            echo"es igual el numero:$n1 y $n2";	//resultado 
                
            if($n1 < $n3){
            echo"\n numero menor:$n1\n<br> intermedio no hay\n<br> numero mayor:$n1";}
            
            else if($n1 > $n3){
            echo"\n numero mayor:$n1\n <br> intermedio no hay\n<br> numero menor :$n1";}
            		
            }
            else if ($n1 == $n3 ){                          
            echo"es igual el numero: $n1 y $n3";	//resultado 
                
            if($n1 < $n2){
            echo"\nel numero menor:$n1 <br>\nintermedio no hay\n<br> numero mayor:$n2<br>";}
            
            else if($n1 > $n2){
            echo"\nel numero mayor:$n1<br>\nintermedio no hay\n<br> numero menor:$n2";}
            
           			
            }

            else if ($n2 == $n1 ){                          
            echo"es igual el numero: $n2 y $n1";	//resultado
                 
            if($n2 < $n3){
            echo"\nel numero menor:$n2 <br>\nintermedio no hay\n <br>numero mayor:$n1";}
            
            else if ($n2 > $n3){
            echo"\nel numero mayor:$n2<br>\nintermedio no hay\n<br> numero menor:$n1";	
            }	
           
             }

            else if ($n2 == $n3 ){                          
            echo"es igual el numero: $n2 y $n3";	//resultado 	
            
            if($n2 < $n1){
            echo"\nel numero menor:$n2\n<br>intermedio no hay\n <br>numero mayor:$n1";}
            
            if($n2 > $n1){
            echo"\nel numero mayor:$n2\n<br>intermedio no hay\n<br> numero menor:$n1";
             } 
           
           }
           if($n1< $n2 and $n2 < $n3){
            echo"\n el menor es:$n1";//da el resultado escrito por teclado/
            echo"\n el intermedio es:$n2";
            echo"\n el mayor es:$n1";}
             
            else if($n2< $n1 and $n1 < $n3){ //da el resultado escrito por teclado/
            echo"\n el menor es:$n2"; 
            echo"\n el intermedio es:$n1"; 
            echo"\n el mayor es:$n1";}
           
            else if($n3 < $n1 and $n1 < $n2){ //da el resultado escrito por teclado/
            echo"\n el menor es:$n3"; 
            echo"\n el intermedio es:$n1"; 
            echo"\n el mayor es:$n2";}

            else if($n2 < $n3 and $n3 < $n1){ //da el resultado escrito por teclado/
            echo"\n el menor es:$n2"; 
            echo"\n el intermedio es:$n3"; 
            echo"\n el mayor es:$n1";}

            else if($n3 < $n2 and $n2 < $n1){ //da el resultado escrito por teclado/
            echo"\n el menor es:$n3"; 
            echo"\n el intermedio es:$n2"; 
            echo"\n el mayor es:$n1";}

            else if($n1 < $n3 and $n3 < $n2){ //da el resultado escrito por teclado/
            echo"\n el menor es:$n1"; 
            echo"\n el intermedio es:$n3"; 
            echo"\n el mayor es:$n2";}
                


?>