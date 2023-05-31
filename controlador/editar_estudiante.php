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
$apellidos = $_POST['apellidos'];
$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$id_grado = $_POST["id_grado"];
$id_seccion = $_POST["id_seccion"];

    // Verificar si el programa existe en la tabla programa
    $programaExists = false;
    $programaQuery = "SELECT id FROM programa WHERE nombre = '$id_grado'";
    $resultPrograma = $conn->query($programaQuery);
    if ($resultPrograma->num_rows > 0) {
        $programaRow = $resultPrograma->fetch_assoc();
        $id_grado = $programaRow['id'];
        $programaExists = true;
    }

    // Verificar si la sección existe en la tabla secciones
    $seccionExists = false;
    $seccionQuery = "SELECT id FROM secciones WHERE nombre = '$id_seccion'";
    $resultSeccion = $conn->query($seccionQuery);
    if ($resultSeccion->num_rows > 0) {
        $seccionRow = $resultSeccion->fetch_assoc();
        $id_seccion = $seccionRow['id'];
        $seccionExists = true;
    }

// Actualizar los datos en la base de datos
$sql = "UPDATE estudiantes SET apellidos = '$apellidos', nombre = '$nombre', genero = '$genero', id_grado = '$id_grado', id_seccion = '$id_seccion' WHERE id = '$id'";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Estudiante actualizado en el sistema'); window.location.href = '../vista/listado_estudiantes.php';</script>";
} else {
    echo "<script>alert('No se actualizó el estudiante en el sistema'); window.location.href = '../vista/edit_estudiante.php';</script>" . $conn->error;
}

$conn->close();
?>
