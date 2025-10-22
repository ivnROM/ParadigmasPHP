<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 18</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ejercicio 18 - Validar Claves Distintas</h1>
    
    <form method="POST" action="">
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>
        
        <label>Clave (primera vez):</label><br>
        <input type="password" name="clave1" required><br><br>
        
        <label>Clave (confirmar):</label><br>
        <input type="password" name="clave2" required><br><br>
        
        <input type="submit" value="Registrar">
    </form>
    
    <?php
    function verificarClaves($clave1, $clave2) {
        if ($clave1 == $clave2) {
            return "Las claves ingresadas son iguales. Usuario registrado correctamente.";
        } else {
            return "ERROR: Las claves ingresadas son distintas. No se puede registrar el usuario.";
        }
    }
    
    if ($_POST) {
        $usuario = htmlspecialchars($_POST['usuario']);
        $clave1 = $_POST['clave1'];
        $clave2 = $_POST['clave2'];
        
        $mensaje = verificarClaves($clave1, $clave2);
        
        echo "<h2>Resultado:</h2>";
        echo "<p>Usuario: " . $usuario . "</p>";
        echo "<p>" . $mensaje . "</p>";
    }
    ?>
</body>
</html>
