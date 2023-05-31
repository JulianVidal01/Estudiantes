<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "estudiantes";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

$sql = "SELECT nombre FROM programa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["nombre"] . "'>" . $row["nombre"] . "</option>";
    }
}

$conn->close();
?>
