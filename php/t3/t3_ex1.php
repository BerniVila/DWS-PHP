<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3 - Ejercicio 1</title>
</head>
<body>
    

<?php

//sumar los numeros naturales pares del 10 al 100

$resultado = 0;
for ($i=10; $i <=100 ; $i++) { 
    if ($i % 2 == 0) {
        $resultado += $i;
    }
}
echo "La suma de los números pares del 10 al 100 es " . $resultado;

?>


</body>
</html>