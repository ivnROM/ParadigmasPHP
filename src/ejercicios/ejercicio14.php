<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 14</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ejercicio 14 - Días de la Semana</h1>
    
    <?php
    $dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    
    echo "<h2>Vector completo:</h2>";
    echo "<p>";
    for ($i = 0; $i < count($dias); $i++) {
        echo $dias[$i] . " - ";
    }
    echo "</p>";
    
    echo "<h2>Primer elemento:</h2>";
    echo "<p>" . $dias[0] . "</p>";
    
    echo "<h2>Último elemento:</h2>";
    echo "<p>" . $dias[count($dias) - 1] . "</p>";
    ?>
</body>
</html>
