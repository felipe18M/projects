<?php
  
    //inicia subprograma cantidad de digitos de un numero
   
      $a = 456777;//variables
     echo"<h2>\n\tCALCULA DIGITOS\n</h2>";
     echo" numero ingresado: <h4> $a</h4><br>";
     //valor ingresado por teclado
     //inicia condicional if para vcalcular digitos/
     if ($a >=0 and $a <=9){//limite de o a 9 que quivale a 1 digito
      echo"el numero tiene 1 digitos";}
     else if($a >=10 and $a <=99){//limite de 10 a 99 que equivale a 2 digitos
      echo"el numero tiene 2 digitos";}
     else if ($a >=100 and $a <=999){//limite de 100 a 999 que equivale 3 digitos
      echo"el numero tiene tres digitos";}
     else if ($a >=1000 and $a <9999){//limite de 1000 a 9999 que equivale 4 digitos
      echo"el numero tiene cuatro digitos";}
     else if ($a >=10000 and $a <99999){//limite de 10000 a 99999 que equivale 5 digitos
      echo"el numero tiene cinco digitos";}
     else if ($a >=100000 and $a <999999){//limite de 100000 a 999999 que equivale 6 digitos
      echo"el numero tiene seis digitos";}
     else if ($a >=1000000 and $a <9999999){//limite de 1000000 a 9999999 que equivale 7 digitos
      echo"el numero tiene siete digitos";}
     
      

?>