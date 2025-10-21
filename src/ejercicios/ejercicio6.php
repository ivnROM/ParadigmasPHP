<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 6 - Variables String</title>
</head>
<body>
    <h1>Ejercicio 6: Variables de tipo String</h1>
    
    <?php
    $var1 = 10;
    $var2 = 20;
    $var3 = 30;
    
    $texto = "Los valores son: $var1, $var2 y $var3";
    
    echo "<h3>Incorporar variables en un string:</h3>";
    echo "<p>" . $texto . "</p>";
    
    echo "<h3>Escapar el símbolo del dólar:</h3>";
    $precio = 90;
    echo "<p>La computadora tiene un precio de \$$precio</p>";
    ?>
    
</body>
</html>
