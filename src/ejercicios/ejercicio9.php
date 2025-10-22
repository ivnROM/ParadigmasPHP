<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 9</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ejercicio 9 - Verificar Edad</h1>
    
    <form method="POST" action="">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>
        
        <label>Edad:</label><br>
        <input type="text" name="edad" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
    
    <?php
    if ($_POST) {
        $nombre = htmlspecialchars($_POST['nombre']);
        $edad = htmlspecialchars($_POST['edad']);
        
        echo "<h2>Resultado:</h2>";
        echo "<p>Nombre: " . $nombre . "</p>";
        
        if ($edad >= 18) {
            echo "<p>Es mayor de edad</p>";
        }
    }
    ?>
</body>
</html>
