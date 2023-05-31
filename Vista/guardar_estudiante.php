<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estudiantes";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$id = $_POST["id"];
$genero = $_POST["genero"];
$id_grado = $_POST["id_grado"];
$id_seccion = $_POST["id_seccion"];

// Verificar si el usuario ya existe en la base de datos
$sqlVerificar = "SELECT id FROM estudiantes WHERE id = '$id'";
$resultVerificar = $conn->query($sqlVerificar);
if ($resultVerificar->num_rows > 0) {
    // El usuario ya existe, muestra un mensaje de error o realiza alguna acción adicional
    echo "<script>alert('El usuario con ID $id ya existe en la base de datos.'); window.location.href = '../vista/registro_estudiantes.php';</script>";
} else {
    // El usuario no existe, puedes proceder a realizar la inserción en la base de datos

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

    if ($programaExists && $seccionExists) {
        $sql = "INSERT INTO estudiantes (nombre, apellidos, id, genero, id_grado, id_seccion) 
                VALUES ('$nombre', '$apellidos', '$id', '$genero', '$id_grado', '$id_seccion')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../vista/registro_estudiantes.php");
        } else {
            echo "<script>alert('No se pudo ingresar el estudiante al sistema'); window.location.href = '../vista/registro_estudiantes.php';</script>" . $conn->error;
        }
    } else {
        echo "El programa o la sección seleccionada no existen en la base de datos";
    }
}

$conn->close();
?>



