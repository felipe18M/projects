<?php
     
           $a = 2;
           $e = 3;
           $i = 4;
           $o = 5;//variables
          echo"<h3>\n\tMAYOR Y MENOR DE 4 NUMEROS\n</h3>";
          echo"numero 1 :$a<br>";//valor ingresado por teclado
          echo"numero 2 :$e<br>";//valor ingresado por teclado
          echo"numero 3 :$i<br>";//valor ingresado por teclado
          echo"numero 4 :$o <br>";//valor ingresado por teclado
          //inicia condicional if para numero menor
          
            
            
           
            //termina condicional if para numero menor
            //inicia condicional if para numero mayor
          if($a == $e and $e == $i and $i == $o){ 
                 echo"los cuatro numeros son iguales: $a y $e y $i y $o  ";}
                 
            else if($a == $e and $i == $o){
                echo"son iguales el primero y segundo: $a y $e ";
                echo"son iguales el tercer y cuarto: $i y $o  ";}
            else if($a== $i and $e == $o){
                echo"son iguales el primer y tercer: $a y $i ";
                echo"son iguales el segundo y cuarto: $e y $o  ";}
            else if($a == $o and $e ==$i){
                echo"son iguales el primer y cuarto: $a y $o  ";
                echo"son iguales el segundo y tercer: $e y $i ";
               
            }
                
                
            if($a == $e and $e == $i){
                echo"el 1,2 y tercer numero son iguales: $a y  y $i ";}
            else if($a == $e and $e == $o){
                echo"el 1,2 y 4to numero son iguales: $a y $e y $o  ";}
            else if($a == $i and $i == $o){
                echo"el 1,3 y 4to numero son iguales: $a y $i y $o  ";}
            else if($e == $i and $i == $o){
                echo"el 2,3 y 4to numero son iguales: $e y $i y $o  ";
                
            }
                
            
            if($a == $e and $e == $a ){
               echo"el primer  y segundo numero son iguales: $a y $e ";}
            else if($a == $i and $i == $a){
               echo"el primer y tercer numero son iguales: $a y $i ";}
            else if($a == $o and $o == $a){
               echo"el primer y cuarto numero son iguales: $a y $o  ";}   
            else if($e == $i and $i == $e){
               echo"el segundo y tercer numero son iguales: $e y $i ";}
            else if($e == $o and $o == $e){
               echo"el segundo y cuarto numero son iguales: $e y $o  ";}
            else if($i == $o and $o == $i){
               echo"el tercer y cuarto numero son iguales: $i  y $o  ";
                
            }
               
            if ($a < $e or $a < $i or $a < $o){
             echo"numero menor:$a ";
                if ($a > $e and $a > $i and $a > $o){
                 echo"numero mayor:$a "; }
                 }
            else if ($e < $a or $e < $i or $e < $o){
             echo"numero menor:$e ";
                if ($e> $a and $e > $i and $e > $o){
                 echo"numero mayor:$e ";}
            }
            else if ( $i < $a or $i < $e or $i < $o){
             echo"numero menor:$i ";
                if ($i > $a and $i > $e and $i > $o){
                 echo"numero mayor:$i ";}
            }
            else if ($o < $a or $o < $e or $o < $i){
             echo"numero menor:$o  ";
                if ($o > $a and $o > $e and $o > $i){
                 echo"numero mayor:$o  ";}
            }
            //termina condicional if para numero menor
            //inicia condicional if para numero mayor
            if ($a > $e or $a > $i or $a > $o){
             echo"numero mayor:$a ";
                if ($a < $e and $a < $i and $a < $o){
                 echo"numero menor:$a ";}
            }
            else if ($e > $a or $e > $i or $e > $o){
             echo"numero mayor:$e ";
                if ($e < $a and $e < $i and $e < $o){
                 echo"numero menor:$e ";}
            }
            else if ($i > $a or $i > $e or $i > $o){
             echo"numero mayor:$i ";
                if ($i < $a and $i < $e and $i < $o){
                 echo"numero menor:$i ";}
            }
            else if ($o > $a or $o > $e or $o > $i){
             echo"numero mayor:$o  ";
                if ($o < $a and $o < $e and $o < $i){
                 echo"numero menor:$o  ";}
            }
           //termina condicional if para numero igual
       

         


?>