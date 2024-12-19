-- Creación de la base de datos
CREATE DATABASE IF NOT EXISTS users_db;

-- Usar la base de datos
USE users_db;

-- Crear la tabla de usuarios
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Insertar algunos usuarios
INSERT INTO users (name, password) VALUES
('Ivo', 'adminpassword'),
('Maeh', 'password1'),
('Lex', 'password2');
