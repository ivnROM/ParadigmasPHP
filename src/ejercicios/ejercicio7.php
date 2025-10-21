<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 7 - Estructura Condicional IF</title>
</head>
<body>
    <h1>Ejercicio 7: Estructura Condicional (if)</h1>
    
    <?php
    $num = rand(1, 3);
    
    echo "<p>Número generado: <strong>" . $num . "</strong></p>";
    
    if ($num == 3) {
        echo "<p style='color: red; font-size: 20px;'>¡El número es tres!</p>";
    }
    
    echo "<p><small>Recarga la página para generar otro número</small></p>";
    ?>
    
</body>
</html>
