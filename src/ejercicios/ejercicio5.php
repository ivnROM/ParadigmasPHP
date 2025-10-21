<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 5 - Tipos de Variables</title>
</head>
<body>
    <h1>Ejercicio 5: Tipos de Variables</h1>
    
    <?php
    $entero = 25;
    $decimal = 3.14;
    $cadena = "Hola Mundo";
    $booleano = true;
    
    echo "<h3>Variables definidas:</h3>";
    echo "<p>Variable <strong>integer</strong>: " . $entero . "</p>";
    echo "<p>Variable <strong>double</strong>: " . $decimal . "</p>";
    echo "<p>Variable <strong>string</strong>: " . $cadena . "</p>";
    echo "<p>Variable <strong>boolean</strong>: " . ($booleano ? "true" : "false") . "</p>";
    ?>
    
</body>
</html>
