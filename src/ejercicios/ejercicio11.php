<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 11</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ejercicio 11 - Deportes que Practica</h1>
    
    <form method="POST" action="">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>
        
        <label>Deportes que practica:</label><br>
        <input type="checkbox" name="deportes[]" value="Futbol"> Futbol<br>
        <input type="checkbox" name="deportes[]" value="Basket"> Basket<br>
        <input type="checkbox" name="deportes[]" value="Tenis"> Tenis<br>
        <input type="checkbox" name="deportes[]" value="Voley"> Voley<br><br>
        
        <input type="submit" value="Enviar">
    </form>
    
    <?php
    if ($_POST) {
        $nombre = htmlspecialchars($_POST['nombre']);
        
        echo "<h2>Resultado:</h2>";
        echo "<p>Nombre: " . $nombre . "</p>";
        
        if (isset($_POST['deportes'])) {
            $cantidadDeportes = count($_POST['deportes']);
            echo "<p>Cantidad de deportes que practica: " . $cantidadDeportes . "</p>";
        } else {
            echo "<p>No practica ningún deporte</p>";
        }
    }
    ?>
</body>
</html>
