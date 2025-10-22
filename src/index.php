<?php
// variables de entorno de render
// render usa DATABASE_URL para bases de datos relacionales.

$db_url = getenv('DATABASE_URL');

if ($db_url) {
    $url = parse_url($db_url);
    
    // por ahora mysql, ver si usar postgre
    $scheme = $url['scheme'] === 'mysql' ? 'mysql' : 'pgsql'; 

    $host = $url['host'];
    $db   = substr($url['path'], 1); 
    $user = $url['user'];
    $pass = $url['pass'];
    $port = $url['port'] ?? ($scheme === 'mysql' ? 3306 : 5432); // puerto por defecto
    $charset = 'utf8mb4';

    $dsn = "$scheme:host=$host;port=$port;dbname=$db;charset=$charset";
} else {
    // FALLBACK LOCAL (si no encuentra DATABASE_URL, para cambios locales)
    $host = 'localhost';
    $db   = 'ejerciciosdb';
    $user = 'j0lines';
    $pass = 'ejerciciospass';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
}

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     error_log("Error de conexión a la BD: " . $e->getMessage());
     die("Lo siento, no se pudo conectar a la base de datos.");
}

$stmt = $pdo->query('SELECT nombre_archivo, titulo FROM ejercicios ORDER BY orden ASC');
$ejercicios = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Guia PHP</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Guía de PHP - Iván Meyer</h1>
  <ul>
    <!-- automatizar esto más adelante */ -->
    <!-- <li><a href="ejercicios/ejercicio4.php">Ejercicio 4</a></li>
    <li><a href="ejercicios/ejercicio5.php">Ejercicio 5</a></li>
    <li><a href="ejercicios/ejercicio6.php">Ejercicio 6</a></li>
    <li><a href="ejercicios/ejercicio7.php">Ejercicio 7</a></li>
    <li><a href="ejercicios/ejercicio8.php">Ejercicio 8</a></li>
    <li><a href="ejercicios/ejercicio9.php">Ejercicio 9</a></li>
    <li><a href="ejercicios/ejercicio10.php">Ejercicio 10</a></li>
    <li><a href="ejercicios/ejercicio11.php">Ejercicio 11</a></li>
    <li><a href="ejercicios/ejercicio12.php">Ejercicio 12</a></li>
    <li><a href="ejercicios/ejercicio13.php">Ejercicio 13</a></li>
    <li><a href="ejercicios/ejercicio14.php">Ejercicio 14</a></li>
    <li><a href="ejercicios/ejercicio15.php">Ejercicio 15</a></li>
    <li><a href="ejercicios/ejercicio16.php">Ejercicio 16</a></li>
    <li><a href="ejercicios/ejercicio17.php">Ejercicio 17</a></li>
    <li><a href="ejercicios/ejercicio18.php">Ejercicio 18</a></li> -->
    <?php foreach ($ejercicios as $ejercicio): ?>
      <li>
          <a href="ejercicios/<?php echo htmlspecialchars($ejercicio['nombre_archivo']); ?>">
              <?php echo htmlspecialchars($ejercicio['titulo']); ?>
          </a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>

