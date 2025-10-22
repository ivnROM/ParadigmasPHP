<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 10</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ejercicio 10 - Nivel de Estudios</h1>
    
    <form method="POST" action="">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>
        
        <label>Nivel de estudios:</label><br>
        <input type="radio" name="estudios" value="1" required> 1 - No tiene estudios<br>
        <input type="radio" name="estudios" value="2"> 2 - Estudios primarios<br>
        <input type="radio" name="estudios" value="3"> 3 - Estudios secundarios<br><br>
        
        <input type="submit" value="Enviar">
    </form>
    
    <?php
    if ($_POST) {
        $nombre = htmlspecialchars($_POST['nombre']);
        $estudios = htmlspecialchars($_POST['estudios']);
        
        $tipoEstudios = "";
        
        if ($estudios == 1) {
            $tipoEstudios = "No tiene estudios";
        } elseif ($estudios == 2) {
            $tipoEstudios = "Estudios primarios";
        } elseif ($estudios == 3) {
            $tipoEstudios = "Estudios secundarios";
        }
        
        echo "<h2>Resultado:</h2>";
        echo "<p>Nombre: " . $nombre . "</p>";
        echo "<p>Tipo de estudios: " . $tipoEstudios . "</p>";
    }
    ?>
</body>
</html>
