<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "estudiantes";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Verificar si se ha recibido un ID válido
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el registro
    $sql = "DELETE FROM estudiantes WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../vista/listado_estudiantes.php");
    } else {
        echo "<script>alert('No se pudo eliminar el estudiante al sistema'); window.location.href = '../vista/listado_estudiante.php';</script>" . $conn->error;
    }
} else {
    echo "<script>alert('No se pudo eliminar el estudiante al sistema'); window.location.href = '../vista/listado_estudiante.php';</script>";
}

$conn->close();
?>
