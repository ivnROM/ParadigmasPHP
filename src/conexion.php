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
