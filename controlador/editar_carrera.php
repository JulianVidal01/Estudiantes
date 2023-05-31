<?php
// Conexión a la base de datos (debes proporcionar los detalles de conexión)
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "estudiantes";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos enviados desde el formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];

// Actualizar los datos en la base de datos
$sql = "UPDATE programa SET nombre = '$nombre' WHERE id = '$id'";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Programa actualizado en el sistema'); window.location.href = '../vista/listado_carreras.php';</script>";
} else {
    echo "<script>alert('No se actualizar el programa en el sistema'); window.location.href = '../vista/edit_carrera.php';</script>" . $conn->error;
}

$conn->close();
?>
