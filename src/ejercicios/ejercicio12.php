<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 12</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ejercicio 12 - Ingresos Mensuales</h1>
    
    <form method="POST" action="">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>
        
        <label>Ingresos mensuales:</label><br>
        <select name="ingresos" required>
            <option value="">Seleccione...</option>
            <option value="1-1000">1-1000</option>
            <option value="1001-3000">1001-3000</option>
            <option value=">3000">>3000</option>
        </select><br><br>
        
        <input type="submit" value="Enviar">
    </form>
    
    <?php
    if ($_POST) {
        $nombre = htmlspecialchars($_POST['nombre']);
        $ingresos = htmlspecialchars($_POST['ingresos']);
        
        echo "<h2>Resultado:</h2>";
        echo "<p>Nombre: " . $nombre . "</p>";
        
        if ($ingresos == ">3000") {
            echo "<p>Debe pagar impuestos a las ganancias</p>";
        } else {
            echo "<p>No debe pagar impuestos a las ganancias</p>";
        }
    }
    ?>
</body>
</html>
