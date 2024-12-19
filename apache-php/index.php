<?php
// Mostrar un mensaje de "Hola Mundo"
echo "<h1>Hola Mundo desde PHP!</h1>";

// Mostrar la fecha y hora actual
echo "<p>Fecha y Hora actual: " . date("Y-m-d H:i:s") . "</p>";

// Mostrar la versión de PHP
echo "<p>Versión de PHP: " . phpversion() . "</p>";

// Mostrar la versión de Apache
echo "<p>Versión de Apache: " . apache_get_version() . "</p>";

// Mostrar la IP del servidor
echo "<p>IP del servidor: " . $_SERVER['SERVER_ADDR'] . "</p>";

// Mostrar la IP del cliente
echo "<p>IP del cliente: " . $_SERVER['REMOTE_ADDR'] . "</p>";
?>