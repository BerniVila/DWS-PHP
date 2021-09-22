<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>

    <?php

        echo "Segundo ejercicio: visualización del contenido de variables";

        echo "<br>";

        //mi nombre
         $nombre = "Berni";

        //mi edad
        $edad = 39;

        //forma 1
        echo "Mi nombre es $nombre y mi edad es $edad";

        echo "<br>";
        //forma 2
        echo "Mi nombre es " . $nombre ."  y mi edad es " . $edad;
    ?>

</body>

</html>