<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 13</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ejercicio 13 - Contrato Laboral</h1>
    
    <form method="POST" action="">
        <label>Ciudad:</label><br>
        <input type="text" name="ciudad" required><br><br>
        
        <label>Empresa:</label><br>
        <input type="text" name="empresa" required><br><br>
        
        <label>Representante:</label><br>
        <input type="text" name="representante" required><br><br>
        
        <label>Domicilio Empresa:</label><br>
        <input type="text" name="domicilio_empresa" required><br><br>
        
        <label>Empleado:</label><br>
        <input type="text" name="empleado" required><br><br>
        
        <label>Domicilio Empleado:</label><br>
        <input type="text" name="domicilio_empleado" required><br><br>
        
        <input type="submit" value="Generar Contrato">
    </form>
    
    <?php
    if ($_POST) {
        $ciudad = htmlspecialchars($_POST['ciudad']);
        $empresa = htmlspecialchars($_POST['empresa']);
        $representante = htmlspecialchars($_POST['representante']);
        $domicilio_empresa = htmlspecialchars($_POST['domicilio_empresa']);
        $empleado = htmlspecialchars($_POST['empleado']);
        $domicilio_empleado = htmlspecialchars($_POST['domicilio_empleado']);
        
        echo "<h2>Contrato Generado:</h2>";
        echo "<textarea rows='15' cols='80' readonly>";
        echo "En la ciudad de $ciudad, se acuerda entre la Empresa $empresa\n";
        echo "representada por el Sr. $representante en su carácter de Apoderado,\n";
        echo "con domicilio en la calle $domicilio_empresa y el Sr. $empleado,\n";
        echo "futuro empleado con domicilio en $domicilio_empleado, celebrar el presente\n";
        echo "contrato a Plazo Fijo, de acuerdo a la normativa vigente de los\n";
        echo "artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.";
        echo "</textarea>";
    }
    ?>
</body>
</html>
