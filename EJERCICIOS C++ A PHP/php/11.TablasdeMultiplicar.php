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