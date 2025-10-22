<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 15 - Pedido de Pizzas</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ejercicio 15 - Pedido de Pizzas</h1>

    <form method="POST" action="">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Dirección:</label><br>
        <input type="text" name="direccion" required><br><br>

        <label><input type="checkbox" name="jamon_queso" value="sí"> Jamón y Queso</label><br>
        <label>Cantidad:</label>
        <input type="number" name="cant_jq" min="0" value="0"><br><br>

        <label><input type="checkbox" name="napolitana" value="sí"> Napolitana</label><br>
        <label>Cantidad:</label>
        <input type="number" name="cant_nap" min="0" value="0"><br><br>

        <label><input type="checkbox" name="muzzarella" value="sí"> Muzzarella</label><br>
        <label>Cantidad:</label>
        <input type="number" name="cant_muz" min="0" value="0"><br><br>

        <input type="submit" value="Confirmar Pedido">
    </form>

    <?php
    if ($_POST) {
        $nombre = htmlspecialchars($_POST['nombre']);
        $direccion = htmlspecialchars($_POST['direccion']);

        // verificamos qué pizzas fueron pedidas
        $pedido = "Pedido de pizzas\n";
        $pedido .= "Cliente: $nombre\n";
        $pedido .= "Dirección: $direccion\n\n";
        $pedido .= "Detalles del pedido:\n";

        if (isset($_POST['jamon_queso']) && $_POST['cant_jq'] > 0) {
            $pedido .= "- Jamón y Queso: {$_POST['cant_jq']} unidad(es)\n";
        }
        if (isset($_POST['napolitana']) && $_POST['cant_nap'] > 0) {
            $pedido .= "- Napolitana: {$_POST['cant_nap']} unidad(es)\n";
        }
        if (isset($_POST['muzzarella']) && $_POST['cant_muz'] > 0) {
            $pedido .= "- Muzzarella: {$_POST['cant_muz']} unidad(es)\n";
        }

        $pedido .= "\n---------------------------\n";

        // crear o agregar al archivo pedidos.txt
        $archivo = fopen("pedidos.txt", "a");
        fwrite($archivo, $pedido);
        fclose($archivo);

        echo "<h2>Pedido registrado:</h2>";
        echo "<textarea rows='10' cols='60' readonly>$pedido</textarea>";
    }
    ?>
</body>
</html>
