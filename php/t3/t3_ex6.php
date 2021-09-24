<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3 - Ejercicio 6</title>
</head>

<body>

    <?php

    $num1 = (int)$_POST["operando1"];
    $op = $_POST["operador"];
    $num2 = (int)$_POST["operando2"];

    switch ($op) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
            break;

        default:
            $result = $num1 + $num2;
            break;
    }

    echo $num1 . $op . $num2 . " = " . $result;
    //echo "$num1 $op $num2 = " . $result;

    ?>

</body>

</html>