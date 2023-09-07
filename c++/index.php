<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>C++ A PHP</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="javascript/funcion.js"></script>
</head>
<body id="grid-container">
    <header class="header">
        <h1>C++ a PHP</h1>
    </header>
    <main class="main">
    
        <aside class="aside">
        <nav class="nav">
            <ul class="list">
                <li><a href="#1"><span class="text">1.mayor menor de 2 #</span></a></li>
                <li><a href="#2"><span class="text">2.ecuaciones</span></a></li>
                <li><a href="#3"><span class="text">3.calculadora</span></a></li>
                <li><a href="#"><span class="text">4.hamburguesa no disponible</span></a></li>
                <li><a href="#5"><span class="text">5.Menor Intermedio Mayor</span></a></li>
                <li><a href="#6"><span class="text">6.Digitos de un Numero</span></a></li>
                <li><a href="#7"><span class="text">7.Menor Mayor 4#</span></a></li>
                <li><a href="#8"><span class="text">8.Conversor de Medidas</span></a></li>
                <li><a href="#"><span class="text">9.factura no disponible</span></a></li>
                <li><a href="#10"><span class="text">10.Calcula Notas</span></a></li>
                <li><a href="#11"><span class="text">11.Tablas de Multiplicar</span></a></li>
                <li><a href="#12"><span class="text">12.Decimal y Binario</span></a></li>
                <li><a href="#"><span class="text">13.50 Estudiantes no disponible</span></a></li>
            </ul>
        </nav>
        </aside>
        
        <div class="secciones">
            <section class="section">
                <article id="1">

                <?php

                    echo"<h1>Programa Mayor y Menor de 2 Numeros</h1><br>";
                        
                            //inicia el subprograma mayor y menor de 2 numeros
                            $a = 3;
                            $b = 2;
                        
                            //variable float para numeros no enteros 
                            
                            //echo muestra en pantalla
                            echo "numero 1: $a<br>";
                            //da valor a la variable float
                            echo "numero 2: $b<br>";
                            //da valor a la variable float
                            //inicia sentencia if


                            if ($a<$b){//ejecut$a la condicion si a es menor que b
                            echo "numero menor:$a<br>";
                            }
                            if($b<$a){//ejecuta la condicion si b es menor que a
                            echo "numero menor:$b<br>";
                            }
                            if ($a>$b){//ejecuta la condicion si a es mayor que b
                            echo" numero mayor:$a<br>";
                            }
                            if ($b>$a){//ejecuta la condicion si b es mayor que a
                            echo"numero mayor:$b<br>";}
                            
                            if ($a==$b && $b==$a){//ejecuta la condicion A es igual B y B es igual a
                            echo"el numero 1 y 2 son igual:$a";}
                            
                        


                    ?>
                </article>
                <article id="2">
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

                                echo"<h1>\tECUACIONES\n</h1><br>";
                                
                                echo"1.y=m*x+b<br>";
                                echo"2.v:e/t<br>";
                                echo"3.v=c*R<br>";
                                
                                
                        
                                echo"<h4>\t1.ECUACION DE y=m*x+b:\n</h4>";
                                echo"primer numero:  $m<br>";
                                echo"segundo numero:$x<br>";
                                echo"tercer numero:\t  $b<br>";
                                $r=$m*$x+$b;//formula de la ecuacion y
                                echo"El valor de y es:$r<br>";
                                

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
                                
                                echo"\t<h4> ECUACION DE VELOCIDA,CORRIENTE Y RESISTENCIA </h4>";//se muestra en pantalla
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
                </article>
                <article id="3">
                        <div class="calculadora">
                            <div class="titlecal">
                            <h1>Calculadora PHP </h1></div>
                            
                            <form  method="post">
                                <select name="operador">
                                    <option value="suma">Suma</option>
                                    <option value="resta">Resta</option>
                                    <option value="multiplicacion">Multiplicacion</option>
                                    <option value="division">Division</option>
                                </select><br>
                                Ingresa tu primer numero:<br>
                                <input type="number" name="valor1" class="valores"><br>
                                Ingresa tu segundo valor:<br>
                                <input type="number" name="valor2" class="valores"><br>
                                <input type="reset" value="Borrar" class="button">
                                <input type="submit" value="Enviar" name="enviar" class="button">
                            </form>
                        </div>
                    <?php 
                        if(isset($_POST["enviar"])){
                            if($_POST['operador'] === "suma"){  
                                $resul = $_POST['valor1'] + $_POST['valor2'];
                                echo ( $_POST ["valor1"] + $_POST ["valor2"]);
                                } 
                                
                                elseif($_POST['operador'] === "resta"){ 
                                    $resul = $_POST['valor1'] - $_POST['valor2']; 
                                    echo ($_POST ["valor1"] - $_POST ["valor2"]);
                                    } 
                                    
                                elseif($_POST['operador'] === "multiplicacion"){ 
                                    $resul = $_POST['valor1'] * $_POST['valor2']; 
                                    echo ($_POST ["valor1"] * $_POST ["valor2"]);
                                    }
                                     
                                else{ $resul = $_POST['valor1'] / $_POST['valor2']; 
                                    echo ($_POST ["valor1"] / $_POST ["valor2"]);
                                    } 
                                }

                    ?>
                    
                </article>


                <article id="4"></article>

                <article id="5">
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
                </article>


                <article id="6">
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
                </article>
                <article id="7">
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
                </article>
                <article id="8">
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
                </article>
                <article id="9">

                </article>
                <article id="10">
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
                </article>
                <article id="11">
                <?php
    
                        $j = 4;  
                        do{
                            echo"<h2>\n\tTABLAS DE MULTIPLICAR\n</h2>";//se muestra en pantalla   
                        echo" tabla consultada $j<br>\n";}// mostrar en pantalla
                        
                        while($j<=1 and $j>=10);{
                        
                        for ($i=1;$i<=10;$i++){//condicional for desde 1 hasta 10
                            $r = $j*$i;
                        echo"$j x $i = $r<br>";}}
                    ?>
                </article>
                <article id="13">

                </article>
                <article id="12">
                <?php
                    $oper = 2;
                    $a = 3.5;

                    echo "CONVIERTE DE BINARIO A DECIMAL O DECIMAL A BINARIO <br><br>";
                    echo "1. Binario-Decimal <br>";
                    echo "2. Decimal-Bimario <br>";
                    echo "elegiste para convertir: $oper <br>";

                    switch ($oper) {
                        case 1:
                            echo "número decimal: $a <br>";
                            
                            function binaryToDecimal($binary) {
                                return bindec($binary);
                            }
                            
                            $R_binario = binaryToDecimal($a);
                            echo "El valor decimal de $a es $R_binario";
                            
                        
                        case 2:
                            echo " número decimal: $a <br>";
                            
                            function decimalToBinary($decimal) {
                                return decbin($decimal);
                            }
                            
                            $R_decimal = decimalToBinary($a);
                            echo "El valor binario de $a es $R_decimal";
                            
                    }
                    ?>
                </article>


            </section>
        </div>
        

    </main>
    
    <footer class="footer">
        <h4>&copy; cristian felipe martinez sanchez</h4>
    </footer>
</body>
</html>