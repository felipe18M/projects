<?php





  $a = 4;
  $b = 6;//variables
   
   echo"<h2>\tCALCULADORA de C++ a php\n</h2>";//se muestra enb pantalla
   echo" <h3>operaciones a realizar:\n<br></h3>";//submenu 3
   echo"+.\n";//operacion de suma
   echo"-.\n";//operacion de resta 
   echo"*.\n";//operacion de multiplicacioon
   echo"/.\n";//operacion de division
   echo"%\n<br>";//operacion de modulo
   
   //inicia operacion suma
    echo"<h4>SUMA:\n</h4>"; 
    echo"  primer digito:   $a\n<br>";//valor que se ingresa por teclado
    echo"  segundo digito:  $b\n<br>";//valor ingresado por teclado
    $s = $a + $b;
    echo"la suma es: $s<br>"; //resultado suma
    
    
   //inicia operacion resta

    echo"<h4>RESTA:\n</h4>";
    echo"  primer digito:  $a\n<br>";//valor ingresado por teclado
    echo"  segundo digito: $b\n<br>";//valor ingresado por teclado
    $r = $a - $b;
    echo"la resta es:$r<br>";//resultado resta
   
    
   //inicia operacion multiplicacion
    echo"<h4> MULTIPLICACION:\n</h4>";
    echo"  primer digito:  $a\n<br>";//valor ingresado por teclado
    echo"  segundo digito: $b\n<br>";//valor ingresado por teclado
    $m = $a * $b;
    echo"la multiplicacion es:$m<br>";//resultado multiplicacion
    
    
   //inicia operacion division
    echo"<h4>DIVISION:\n</h4>";
    echo"  primer digito:  $a\n<br>";//valor ingreasdo por teclado
    echo"  segundo digito: $b\n<br>";//valor ingresado por teclodo
    $d = $a / $b;
    echo"la division es:$d<br>" ;//resultado division
    
    
   //inicia operacion modulo 
    echo"<h4> MODULO:\n</h4>";
    echo"  primer digito:  $a\n<br>";//valor ingresado por teclado
    echo"  segundo digito: $b\n<br>";//valor ingresado por teclado
    $p = $a % $b;
    echo"el porcentaje es:$p";//resultado modulo
  
   
 









?>