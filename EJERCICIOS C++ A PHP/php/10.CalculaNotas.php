<?php
    
        $n1 =  4;
        $n2 =  3;
        $n3 =  4;
        $n4 =  4;
        $n5 =  4;
        $nf;
        $nom; //variable decimal
        $oper = "felipe";//variable del nombre
         //mostrar en pantalla
         echo" <h2>\t\t CALCULA NOTAS\t\t</h2>"; 
         echo" <h5>Nombre: $oper </h5>";
         
         //digitar  Notas
        echo"\t<h4>-----Notas-----</h4>";
        echo" Nota 1: $n1<br>";//valor ingresado por teclado
        echo" Nota 2: $n2<br>";//valor ingresado por teclado
        echo" Nota 3: $n3<br>";//valor ingresado por teclado
        echo" Nota 4: $n4<br>";//valor ingresado por tecladok
        echo" Nota 5: $n5<br>";//valor ingresado por teclado
          
          //inicia condicional  while para correcion de Notas
        while($n1 < 0 or $n1 > 5){//valor limite a ingresar Notas
        echo"corrija primera Nota:\n $n1";}//corregir Nota por teclado
        while($n2<0 or $n2>5){//valor limite a ingresar Notas
        echo"corrija segunda Nota:\n $n2";}//corregir Nota por teclado
        while($n3<0 or $n3>5){//valor limite a ingresar Notas
        echo"corrija tercera Nota:\n $n3";}//corregir Nota por teclado
        while($n4<0 or $n4>5){//valor limite a ingresar Notas
        echo"corrija cuarta Nota:\n $n4";}//corregir Nota por teclado
        while($n5<0 or $n5>5){//valor limite a ingresar Notas
        echo"corrija quinta Nota:\n $n5";}//corregir Nota por teclado
        
          //termina condicional while
        $nf =  $n1 * 0.50 + $n2 * 0.15 + $n3 * 0.35 + $n4 * 0.1 + $n5 * 0.2 / 5;//formula de Nota final
        //condicion if 
        if ($nf <= 2.9 and $nf > 0){//limite de Nota para promedio deficiente/
					echo"<h4>\t Notas:\n</h4>";
                   echo"20% Nota 1 :$n1<br>";//valor ingresado de Nota 1
                   echo"30% Nota 2 :$n2<br>";//valor ingresado de Nota 3
                   echo"15% Nota 3 :$n3<br>";//valor ingresado de Nota 3
                   echo"15% Nota 4 :$n4<br>";//valor ingresado de Nota 4
                   echo"20% Nota 5 :$n5<br>";//valor ingresado de Nota 5
                   echo" Nota final del estudiante:\n$nf<br>";
                   echo" su promedio deficiente<br>";//se muestra en pantalla
                   echo"Nombre Estudiante:$oper";//nombre ingresado
				}			
		    else if ($nf >= 3.0 and $nf <= 3.5) { //limite de Nota para promedio bajo/
					echo"<h4>\t Notas:\n</h4>";
                   echo"20% Nota 1 :$n1<br>";//valor ingresado de Nota 1
                   echo"30% Nota 2 :$n2<br>";//valor ingresado de Nota 2
                   echo"15% Nota 3 :$n3<br>";//valor ingresado de Nota 3
                   echo"15% Nota 4 :$n4<br>";//valor ingresado de Nota 4
                   echo"20% Nota 5 :$n5<br>";//valor ingresado de Nota 5
                   echo" Nota final del estudiante:\n $nf<br>";
                   echo"su promedio bajo<br>";//se muestra en pantalla
                   echo"Nombre Estudiante:$oper";//nombre ingresado
				}
			  else if ($nf >= 3.6 and $nf <= 3.9) {//limite de Nota para basico/				
				   echo"<h4>\t Notas:\n</h4>";
                   echo"20% Nota 1 : $n1<br>";//valor ingresado de Nota 1
                   echo"30% Nota 2 : $n2<br>";//valor ingresado de Nota 3
                   echo"15% Nota 3 : $n3<br>";//valor ingresado de Nota 3
                   echo"15% Nota 4 : $n4<br>";//valor ingresado de Nota 4
                   echo"20% Nota 5 : $n5<br>";//valor ingresado de Nota 5
                   echo" Nota final del estudiante:\n $nf<br>";// Nota promediada
                   echo"su promedio basico<br>";//se muestra en pantalla
                   echo"Nombre Estudiante: $oper";//nombre ingresado		
				}
			else if($nf >= 4.0 and $nf <= 4.5){//limite de Nota para promedio alto/
					echo"<h4>\t Notas:\n</h4>";
                   echo"20% Nota 1 : $n1<br>";//valor ingresado de Nota 1
                   echo"30% Nota 2 : $n2<br>";//valor ingresado de Nota 2
                   echo"15% Nota 3 : $n3<br>";//valor ingresado de Nota 3
                   echo"15% Nota 4 : $n4<br>";//valor ingresado de Nota 4
                   echo"20% Nota 5 : $n5<br>";//valor ingresado de Nota 5
                   echo" Nota final del estudiante:\n$nf<br>";// Nota promediada
                   echo"promedio alto<br>";//se muestra en pantalla
                   echo"Nombre Estudiante: $oper"; //nombre ingresado
			    }
			else if($nf >= 4.6 and $nf <= 5.0){//limite de Nota para promedio superior/
					echo"<h4>\t Notas:\n</h4>";
                   echo"20% Nota 1 : $n1<br>";//valor ingresado de Nota 1
                   echo"30% Nota 2 : $n2<br>";//valor ingresado de Nota 2
                   echo"15% Nota 3 : $n3<br>";//valor ingresado de Nota 3
                   echo"15% Nota 4 : $n4<br>";//valor ingresado de Nota 4
                   echo"20% Nota 5 : $n5<br>";//valor ingresado de   Nota 5
                   echo"  Nota final del estudiante:\n$nf<br>";//  Nota promediada
                   echo"promedio superior<br>";//se muestra en pantalla
                   echo"Nombre Estudiante: $oper";//nombre ingresado 
			    }





?>