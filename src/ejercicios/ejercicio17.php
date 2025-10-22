<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 17</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ejercicio 17 - Claves de Usuarios</h1>
    
    <?php
    $usuarios = array(
        "juan" => "pass123",
        "maria" => "abc456",
        "pedro" => "xyz789",
        "ana" => "qwe321",
        "luis" => "zxc654"
    );
    
    echo "<h2>Usuarios del sistema:</h2>";
    echo "<ul>";
    foreach ($usuarios as $nombre => $clave) {
        echo "<li>Usuario: $nombre</li>";
    }
    echo "</ul>";
    
    echo "<h2>Acceder a un componente:</h2>";
    echo "<p>Usuario: juan</p>";
    echo "<p>Clave: " . $usuarios["juan"] . "</p>";
    ?>
</body>
</html>
