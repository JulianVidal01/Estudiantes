<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Página de inicio</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="container-l">
    <div class="in_general">
            <h2>Registro y consulta de estudiantes de Cali</h2>
            <h3><?php include '../controlador/get_user.php'; ?></h3>
        </div>

        <div class="navigation">
            <a class="navegacion__enlace navegacion__enlace--activo" href="inicio.php">Inicio</a>
            <a class="navegacion__enlace" href="registro_estudiantes.php">Registro de estudiantes</a>
            <a class="navegacion__enlace" href="listado_estudiantes.php">Listado de estudiantes</a>
            <a class="navegacion__enlace" href="listado_carreras.php">Consulta de carreras</a>
            <a class="navegacion__enlace" href="#">Administrar estudiantes</a>
        </div>

        <h3>Base de datos "Santiago de Cali"</h3>
    </div>
</body>
</html>
