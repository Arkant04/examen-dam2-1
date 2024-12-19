<?php
$servername = getenv('MYSQL_HOST'); // db
$username = getenv('MYSQL_USER'); // root
$password = getenv('MYSQL_PASSWORD'); // rootpassword
$dbname = getenv('MYSQL_DATABASE'); // users_db

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "<h1>Conexión exitosa a la base de datos!</h1>";
}

// Mostrar la fecha y hora actual
echo "<p>Fecha y hora actual: " . date('Y-m-d H:i:s') . "</p>";

// Mostrar la versión de PHP
echo "<p>Versión de PHP: " . phpversion() . "</p>";

// Mostrar la versión de Apache
echo "<p>Versión de Apache: " . apache_get_version() . "</p>";

// Mostrar la IP del servidor
echo "<p>IP del servidor: " . $_SERVER['SERVER_ADDR'] . "</p>";

// Mostrar la IP del cliente
echo "<p>IP del cliente: " . $_SERVER['REMOTE_ADDR'] . "</p>";
?>
