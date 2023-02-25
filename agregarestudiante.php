<?php
// Conexión a la base de datos
$mysqli = new mysqli("localhost", "usuario", "contraseña", "basededatos");

// Comprobar si hay errores de conexión
if ($mysqli->connect_errno) {
    echo "Error de conexión: " . $mysqli->connect_error;
    exit();
}


// Obtener los datos del formulario
$codigo = $_POST["codigo"];
$cedula = $_POST["cedula"];
$genero = $_POST["genero"];
$nombre = $_POST["nombre"];

// Insertar el estudiante en la tabla "Estudiantes"
$query = "INSERT INTO Estudiantes (codigo, cedula, genero, nombre) VALUES ('$codigo', '$cedula', '$genero', '$nombre')";
$resultado = $mysqli->query($query);

// Comprobar si hay errores de inserción
if (!$resultado) {
    echo "Error de inserción: " . $mysqli->error;
    exit();
}

// Cerrar la conexión a la base de datos
$mysqli->close();
?>
