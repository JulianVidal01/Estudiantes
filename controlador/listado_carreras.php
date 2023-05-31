<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "estudiantes";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

$sql = "SELECT * FROM programa";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";

        echo "<td>";
        echo "<a href='../vista/edit_carrera.php?id=" . $row['id'] . "'>Editar</a>";
        echo " | ";
        echo "<a href='../controlador/eliminar_carrera.php?id=" . $row['id'] . "'>Eliminar</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No se encontraron programas.</td></tr>";
}

$conn->close();
?>
