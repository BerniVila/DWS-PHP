<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmos y funciones PHP</title>
</head>
<body>
    
<?php

//algoritmo de busqueda
$a = array(0 => "blue", 1 => "green");
$b = array_search("green", $a); //consultar el orden de los argumentos
echo $b;

//algoritmo de ordenacion
$c = array(0 => 21, 1 => 8, 2 => 9);
sort($c);
rsort($c);


//funciones
function nombreDeLaFuncion ($arg1, $arg2){
$arg1 + $arg2;
return $arg1 + $arg2;
}

?>


</body>
</html>