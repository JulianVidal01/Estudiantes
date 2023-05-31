<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "estudiantes";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consultar la base de datos para verificar las credenciales del usuario
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // El usuario y la contraseña son válidos, redirigir a la página de inicio
        header("Location: ../vista/inicio.php");
        exit();
    } else {
        // Usuario o contraseña incorrectos, mostrar mensaje de error
        echo "<script>alert('No se pudo ingresar al sistemas'); window.location.href = '../index.php';</script>";
    }
}

$conn->close();
?>
