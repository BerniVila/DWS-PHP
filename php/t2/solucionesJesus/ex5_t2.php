<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN” “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd”>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang=”en” lang=”en”>
<head>
<meta http-equiv="content-type" content=”text/html;charset=iso-8859-1” />
<title>Ejercicio 5: Tipos de datos</title>
</head>
<body>
<?php
$temporal = "Juan";
echo "El tipo de la variable \$temporal con valor $temporal es: ".gettype($temporal).".<br/>\n";
$temporal = 3.14;
echo "El tipo de la variable \$temporal con valor $temporal es: ".gettype($temporal).".<br/>\n";
$temporal = false;
echo "El tipo de la variable \$temporal con valor $temporal es: ".gettype($temporal).".<br/>\n";
$temporal = 3;
echo "El tipo de la variable \$temporal con valor $temporal es: ".gettype($temporal).".<br/>\n";
$temporal = null;
echo "El tipo de la variable \$temporal con valor $temporal es: ".gettype($temporal).".<br/>\n";
?>
</body>
</html>