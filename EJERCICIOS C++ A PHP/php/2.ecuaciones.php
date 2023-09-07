<?php

 $a = 4;
 $b = 3;
 $c = 5;
 $m = 3;
 $x = 2;
 $r = 4;
 $t = 3;
 $e = 5;
 $v = 7;
 
          echo"\tECUACIONES\n<br>";
          
          echo"1.y=m*x+b<br>";
          echo"2.v:e/t<br>";
          echo"3.v=c*R";
          
          
	
          echo"<h4>\t1.ECUACION DE y=m*x+b:\n</h4>";
          echo"primer numero:  $m<br>";
          echo"segundo numero:$x<br>";
          echo"tercer numero:\t  $b<br>";
           $r=$m*$x+$b;//formula de la ecuacion y
          echo"El valor de y es:$r";
          

         echo"\t<h4> 2.ECUACION DE v:e/t <h4>";
         echo"1.La velocidad: v=e/t.\n<br>";
         echo"2.El espacio: t*v=e.\n<br>";//ecuacion de espacio
         echo"3.El tiempo: t=e/v.\n<br>";//ecuacion de tiempo
         
        
                   echo"<h5>\n\t-1 ECUACION DE VELOCIDAD\n</h5>";//se muestra en pantalla
				   echo"\nV=E/T.\n<br>";		
                   echo"espacio $e<br>";
                  
                   echo"tiempo $t<br>";
                   
                   $r=$e/$t;//formula de velocidad
                   echo"la velocidad es:$r<br>";//resultado de la ecuacion velocidad
                 
            
	            //inicia la ecuacion de espacio
                 echo"<h5>\n\t-2 ECUACION DE ESPACIO\n</h5>";//se muestra en pantalla
                 echo"\nT*V=E\n<br>";
				 echo"tiempo:$t<br>";
                 
                 echo"velocidad:$v<br>";
                
                 $r=$t*$v;//formula de espacio
                 
                 echo"el espacio es:$r<br>";//resultado de la ecuacion velocidad
                	
                //inicia la ecuacion de tiempo
                 echo"<h5>\n\t-3 ECUACION DE TIEMPO\n</h5>";//se muestra en pantalla
                 echo"\nT=E/V\n<br>";
                 echo"espacio:$e<br>";
                 
                 echo" velocidad:$v<br>";
                
                 $r=$e/$v;//formula de tiempo
                 echo"el tiempo es:$r<br>";//resultado ecuacion de tiempo

          
            //subcaso 3 del caso 2
        	//inicia ecuacion de velocidad,corriente y resistencia
         
         echo"\t<h4> CUACION DE VELOCIADA CORRIENTE Y RESISTENCIA </h4>";//se muestra en pantalla
         echo"1.La velocidad:v=c*R\n<br>";//ecuacion de velocidad
         echo"2.La corriente: R/v=c\n<br>";//ecuacion de corriente
         echo"3.La resistencia:R=c*v\n<br>";//ecuacion de resistencia
         
          
                 echo"<h5>\n\t-1 ECUACION DE VELOCIDAD\n</h5>";
                 echo"\nV=C*R\n<br>";
                 echo" corriente:$c<br>";
                  
                 echo" resistencia:$r<br>";
                 
                 $v=$c*$r;//formula de velocidad
                 echo"la velocidad es:$v<br>";//resultado de ecuacion de velocidad
                 




	            //inicia ecuacion de corriente
	             echo"<h5>\n\t-2 ECUACION DE CORRIENTE\n</h5>";
                 echo"\nR/V=C\n<br>";
                 echo" resistencia:$r<br>";
                 
                 echo" velocidad:$v<br>";
                 
                 $c=$r/$v;//formula de corriente
                 echo"La corriente es:$c<br>";//resultado de ecuacion de corriente
                


                //inicia la ecuacion de resistencia
                 echo"<h5>\n\t-3 ECUACION DE RESISTENCIA\n</h5>";//se muestra en pantalla
                 echo"\nR=C*V\n<br>";
                 echo" corriente:$c<br>";
                
                 echo" velocidad:$v<br>";

                 $r=$c*$v;//formula de resistencia
                 echo"la resistencia es:$r";//resultado de la ecuacion resistencia
                 






?>