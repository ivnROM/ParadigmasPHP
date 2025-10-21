<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 8 - Estructuras Repetitivas</title>
</head>
<body>
    <h1>Ejercicio 8: Tabla de Multiplicar del 2</h1>
    
    <h3>Usando FOR:</h3>
    <p>
    <?php
    for ($f = 2; $f <= 20; $f = $f + 2) {
        echo $f . " - ";
    }
    ?>
    </p>
    
    <h3>Usando WHILE:</h3>
    <p>
    <?php
    $f = 2;
    while ($f <= 20) {
        echo $f . " - ";
        $f = $f + 2;
    }
    ?>
    </p>
    
    <h3>Usando DO-WHILE:</h3>
    <p>
    <?php
    $f = 2;
    do {
        echo $f . " - ";
        $f = $f + 2;
    } while ($f <= 20);
    ?>
    </p>
    
</body>
</html>
