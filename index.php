<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1 class="in_index">Consulta De estudiantes Santiago de Cali</h1>
    <div class="login-container">
        <h2>Inicio de sesión</h2>
        <form action="controlador/login.php" method="post">
            <h3>Cedúla</h3>
            <input type="text" name="username" placeholder="Usuario" required>
            <h3>Contraseña</h3>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
