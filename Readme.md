# Sprint 1: Preparacion

 1-Primero lo que haremos sera hacer un fork del repo 
 2-Lo clonaremos con el comendo de git clone
 3-Abriremos el navegador y veremos si tenemos cuenta si no la iniciaremos
 4-Ejecutamos el siguiente comando para verificar si estás autenticado en Docker Hub:
 docker info
 Buscamos en la salida una línea similar a:
 Username: <tu_usuario>
 Si aparece nuestro nombre de usuario de Docker Hub, significa que tenemos una sesión activa.
 

 # Sprint 2: Apache 

  # Servidor Apache con Docker

En este proyecto creamos un servidor web Apache que sirve un archivo `index.html` con el mensaje "Hola Mundo".

## Pasos

### 1. Crear la estructura de directorios y archivos
Primero, creamos la carpeta llamada `apache` y dentro de ella creamos un archivo `Dockerfile` y un archivo `index.html` con el siguiente contenido:

#### Dockerfile
```dockerfile
# Usamos la imagen oficial de Apache
FROM httpd:2.4

# Copiamos el archivo index.html al directorio adecuado de Apache
COPY index.html /usr/local/apache2/htdocs/

# Exponemos el puerto 80
EXPOSE 80 

```
# Sprint 3

# Proyecto Apache-php

Este proyecto configura un contenedor Docker con Apache y PHP, y muestra un archivo `index.php` que contiene:

- Un mensaje de "Hola Mundo".
- La fecha y hora actual.
- La versión de PHP.
- La versión de Apache.
- La IP del servidor.
- La IP del cliente.

## Pasos para construir y ejecutar el contenedor

### 1. Copia la carpeta `apache` a `apache-php`:

   ```bash
   cp -r apache apache-php
   ```
### 2. Creamos el archivo index.php con el siguiente contenido:
   
   ```php
  <?php
   echo "<h1>¡Hola Mundo!</h1>";
   echo "<p>Fecha y hora actual: " . date('Y-m-d H:i:s') . "</p>";
   echo "<p>Versión de PHP: " . phpversion() . "</p>";
   echo "<p>Versión de Apache: " . apache_get_version() . "</p>";
   echo "<p>IP del servidor: " . $_SERVER['SERVER_ADDR'] . "</p>";
   echo "<p>IP del cliente: " . $_SERVER['REMOTE_ADDR'] . "</p>";
   ?>
   ```
### 3. Rescribimos el archivo Dockerfile y le añadimos el siguiente contenido:

  ```Dockerfile
   FROM php:8.0-apache

   COPY index.php /var/www/html/

   EXPOSE 80

  ```

### 4. Construye la imagen Docker:
   ```bash
   docker build -t apache-php .
   ```

### 5. Ejecuta el contenedor Docker:
   ```bash
docker run -d -p 8080:80 apache-php
   ```
### 6. 
Accede al servidor web en http://localhost:8080 y visualiza la página.
