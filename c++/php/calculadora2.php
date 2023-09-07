<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Calculadora </h1>
                            <form  method="post">
                                <select name="operador">
                                    <option value="suma">Suma</option>
                                    <option value="resta">Resta</option>
                                    <option value="multiplicacion">Multiplicacion</option>
                                    <option value="division">Division</option>
                                </select><br>
                                Ingresa tu primer numero:<br>
                                <input type="number" name="valor1"><br>
                                Ingresa tu segundo valor:<br>
                                <input type="number" name="valor2"><br>
                                <input type="reset" value="Borrar">
                                <input type="submit" value="Enviar">
                            </form>
                    
                    <?php 
                        if(isset($_POST['enviar'])){
                            if($_POST['operador'] === "suma"){  
                                $resul = $_POST['valor1'] + $_POST['valor2'];
                                echo ( $_POST ["valor1"] + $_POST ["valor2"]);
                                echo "su resultado es $resul";} 
                                
                                elseif($_POST['operador'] === "resta"){ 
                                    $resul = $_POST['valor1'] - $_POST['valor2']; 
                                    echo ($_POST ["valor1"] - $_POST ["valor2"]);
                                    echo "su resultado es $resul";} 
                                    
                                elseif($_POST['operador'] === "multiplicacion"){ 
                                    $resul = $_POST['valor1'] * $_POST['valor2']; 
                                    echo ($_POST ["valor1"] * $_POST ["valor2"]);
                                    echo "su resultado es $resul";}
                                     
                                else{ $resul = $_POST['valor1'] / $_POST['valor2']; 
                                    echo ($_POST ["valor1"] / $_POST ["valor2"]);
                                    echo "su resultado es $resul"; } 
                                }

                    ?>