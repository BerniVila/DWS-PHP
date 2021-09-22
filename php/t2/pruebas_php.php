<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba1-PHP</title>
</head>

<body>

    <?php
    echo "<h1>Primer ejercicio en PHP</h1>";
    echo "Este es el resultado correcto del primer ejercicio";
    echo "<br>";

    echo "<br>";
    // COMILLAS Y PARÉNTESIS
    echo "mensaje con comillas";
    echo "<br>";
    //es lo mismo que
    echo ("mensaje con comillas y paréntesis");
    echo "<br>";

    echo "<br>";
    echo 'mensaje con comillas simples';
    echo "<br>";
    //es lo mismo que
    echo "mensaje con comillas dobles";

    echo "<br>";
    //carácter de escape \
    echo "Este texto contiene una barra invertida: \\";
    echo " y este contiene un símbolo del dólar: \$";

    echo "<br>";
    echo "<br>";

    // VARIABLES
    //solo pueden comenzar con guión bajo o letra, además pueden contener números
    //Case-sensitive

    echo "<br>";

    $num1 = 5;
    $num2 = 3;
    $sum = $num1 + $num2;

    echo "La suma de $num1 y $num2 es $sum";

    echo "<br>";
    echo "<br>";
    //DEFINIR UNA CONSTANTE
    define("PI", 3.14159);
    echo PI . " es el valor de la constante PI que acabo de definir";

    echo "<br>";
    echo "<br>";

    //CONCATENAR
    $fraseLarga = "cadena" . " unida";
    echo $fraseLarga;

    echo "<br>";
    echo "<br>";
    $palabra1 = "cadena";
    echo $palabraYVariable = $palabra1 . " concatenada";

    echo "<br>";
    echo "<br>";
    //operador de concatenación abreviado
    echo $palabra1 .= " concatenada con abreviatura";


    echo "<br>";
    echo "<br>";


    echo "<br>";
    echo "<br>";


    echo "<br>";
    echo "<br>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<br> $i";
    }

    echo "<br>";
    echo "<br>";

    //CONVERSIÓN ENTRE TIPOS DE DATOS
    $conversion1 = 1;
    strval($conversion1);
    echo "con strval() ahora $conversion1 es un string";
    echo "<br>";

    intval($conversion1);
    echo "con intval() ahora $conversion1 es un integer";
    echo "<br>";
    floatval($conversion1);
    echo "con floatval() ahora $conversion1 es un float";
    echo "<br>";



    echo "<br>";

    echo "<br>";

    echo "<br>";

    echo "<br>";

    echo "<br>";

    echo "<br>";

    echo "<br>";

    echo "<br>";

    echo "<br>";

    echo "<br>";

    echo "<br>";


    ?>



</body>

</html>