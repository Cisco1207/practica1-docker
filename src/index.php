<?php
$servername = getenv('MYSQL_HOST') ?: 'db';
$username = getenv('MYSQL_USER') ?: 'testuser';
$password = getenv('MYSQL_PASSWORD') ?: 'testpassword';
$dbname = getenv('MYSQL_DATABASE') ?: 'testdb';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "<h1>Conexión exitosa a la base de datos</h1>";
echo "<br>";
echo "<h2>Hola mundo Devops ITLA</h2>";
echo "<br>";
echo "<h3>Me llamo Francisco Antonio Méndez Torres</h3>";
echo "<br>";
echo "<h3>2021-1103</h3>";
?>