<?php
$opcion = 1;
$n1 = 101010;

echo "CONVIERTE DE BINARIO A DECIMAL O DECIMAL A BINARIO <br><br>";
echo "1. Binario-Decimal <br>";
echo "2. Decimal-Bimario <br>";
echo "Que deseas convertir: $opcion <br><br>";

switch ($opcion) {
    case 1:
        echo "Ingresa número decimal: $n1 <br>";
	    
        function binaryToDecimal($binary) {
            return bindec($binary);
        }
        
        $R_binario = binaryToDecimal($n1);
        echo "El número decimal de $n1 es $R_binario";
        break;
    
    case 2:
        echo "Ingresa número decimal: $n1 <br>";
        
        function decimalToBinary($decimal) {
            return decbin($decimal);
        }
        
        $R_decimal = decimalToBinary($n1);
        echo "El número binario de $n1 es $R_decimal";
        break;
}
?>