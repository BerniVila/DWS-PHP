<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN” “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd”>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang=”en” lang=”en”>
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>
Ejercicio 4: Creación y destruccion de
variables
</title>
</head>
<body>
<?php
$nombre = "Juan";
echo 'Informacion de la variable "nombre": <br/>'.var_dump($nombre);
echo "Contenido de la variable: $nombre <br/>";
$nombre = null;
echo "Despues de asignarle un valor nulo: <br/>";
echo var_dump($nombre);
echo "Contenido de la variable: $nombre <br/>";;
?>
</body>
</html>