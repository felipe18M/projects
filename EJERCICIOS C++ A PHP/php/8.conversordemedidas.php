<?php
  
   
     
     $km;
     $hm;
     $dm;
     $dc;
     $cm;
     $mm;
     $valor = 4;
     $a = 20;//variables
    echo"<h3>\n\tCONVERTIR DE METROS A\n</h3>";//se muestra en pantalla
    echo "conversor de medidas:<br>\n 1:km <br>\n 2:hm <br>\n 3:dm <br>\n 4:dc <br>\n 5:cm <br>\n 6:mm <br>\n";//menu
     
     //inicia condicional  if
    if ($valor == 1){
      echo"\t valor en metros:\t$a";//se muestra en pantalla
      //valor ingresado mpor teclado
      $km = $a / 1000;
      echo"resultado en kilometros $km";//resultado
      }       
     else if ($valor == 2){
      echo" valor en metros:\n$a";//se muestra en pantalla
      //valor ingresado por teclado
      $hm = $a / 100;
      echo"resultado en hectometros: $hm";//resultado
      }
     else if ($valor == 3){
      echo" valor en metros:\n$a";//se muestra en pantalla
      $a;//ingresa valor por teclado
      $dm = $a / 10;
      echo"resultado en decametros: $dm";//resultado
      }
     else if ($valor == 4){
      echo" valor en metros:\n$a";//se muestra en pantalla
      $a;//ingresa vlor por teclado
      $dc = $a* 10;
      echo"resultado en decimetros: $dc";//resultado
      }
     else if ($valor == 5){
      echo" valor en metros:\n$a";//se muestra en pantalla
      $a;//ingresa valor por teclado
      $cm = $a * 100;
      echo"resultado en centimetros: $cm";//resultado
      }
     else if ($valor == 6){
      echo" valor en metros:\n$a";//se muestra en pantalla
      $a;//ingresa valor por teclado
      $mm = $a * 1000;
      echo"resultado en milimetros: $mm";//resultado
      }
      //termina condicional if

?>