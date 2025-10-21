<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 4 - Número Aleatorio</title>
</head>
<body>
    <h1>Ejercicio 4: Número Aleatorio</h1>
    
    <?php
    $num = rand(1, 100);
    
    echo "<p>Número generado: <strong>" . $num . "</strong></p>";
    
    if ($num <= 50) {
        echo "<p style='color: blue;'>El número es menor o igual a 50</p>";
    } else {
        echo "<p style='color: green;'>El número es mayor a 50</p>";
    }
    ?>
    
</body>
</html>
