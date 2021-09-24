<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3 - Ejercicio 2</title>
</head>

<body>

    <?php
    //crear funcion que devuelva el producto de dos enteros
    //pasados por parámetro y en el cuerpo de la pagina html
    //llame a la funcion e imprima el valor devuelto

    $num1 = 3;
    $num2 = 5;
    function multiplicar($arg1, $arg2)
    {
        return $arg1 * $arg2;
    }
    echo multiplicar($num1, $num2);

    ?>

</body>

</html>