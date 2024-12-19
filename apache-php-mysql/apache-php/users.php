<?php
$servername = "db";
$username = "root";
$password = "rootpassword"; // rootpassword
$dbname = "users_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consultar los usuarios
$sql = "SELECT id, name, password FROM users";
$result = $conn->query($sql);

echo "<h1>Lista de Usuarios</h1>";
if ($result->num_rows > 0) {
    // Mostrar los usuarios
    while($row = $result->fetch_assoc()) {
        echo "<p>ID: " . $row["id"]. " - Nombre: " . $row["name"]. " - Contraseña: " . $row["password"]. "</p>";
    }
} else {
    echo "<p>No hay usuarios.</p>";
}

$conn->close();
?>
