<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 16</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ejercicio 16 - Pedidos de Pizzas</h1>
    
    <?php
    $archivo = "pedidos.txt";
    
    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        
        echo "<h2>Contenido del archivo pedidos.txt:</h2>";
        echo "<pre>" . htmlspecialchars($contenido) . "</pre>";
    } else {
        echo "<p>El archivo pedidos.txt no existe.</p>";
        echo "<p>Cree el archivo pedidos.txt en el mismo directorio con el siguiente contenido de ejemplo:</p>";
        echo "<pre>";
        echo "Pizza Muzzarella - $500\n";
        echo "Pizza Napolitana - $550\n";
        echo "Pizza Calabresa - $600\n";
        echo "Pizza Especial - $700";
        echo "</pre>";
    }
    ?>
</body>
</html>
