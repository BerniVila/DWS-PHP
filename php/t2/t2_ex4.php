<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>

    <?php
    $nombre = "Berni";

    echo "Información de la variable 'nombre':<br>";

    echo var_dump($nombre);
    echo "<br> Contenido de la variable: " . $nombre;
    $nombre = NULL;
    echo "<br> Después de asignarle un valor nulo: ";
    echo var_dump($nombre);


    ?>


</body>

</html>