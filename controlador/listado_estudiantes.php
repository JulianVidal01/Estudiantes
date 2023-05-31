<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "estudiantes";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

$sql = "SELECT * FROM estudiantes";
$result = $conn->query($sql);

$sql1 = "SELECT * FROM programa";
$result1 = $conn->query($sql1);
$programas = array();

if ($result1->num_rows > 0) {
    while ($row1 = $result1->fetch_assoc()) {
        $programas[$row1['id']] = $row1['nombre'];
    }
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['apellidos'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['genero'] . "</td>";

        // Obtener datos del programa
        $id_grado = $row['id_grado'];
        if (isset($programas[$id_grado])) {
            echo "<td>" . $programas[$id_grado] . "</td>";
        } else {
            echo "<td>N/A</td>";
        }

        echo "<td>";
        echo "<a href='../Vista/edit_estudiante.php?id=" . $row['id'] . "'>Editar</a>";
        echo " | ";
        echo "<a href='../controlador/eliminar_estudiante.php?id=" . $row['id'] . "'>Eliminar</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No se encontraron estudiantes.</td></tr>";
}

$conn->close();
?>
