<!DOCTYPE html>
<html>
<head>
    <title>Listado de Estudiantes</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="container-l">
    <div class="in_general">
            <h2>Registro y consulta de estudiantes de Cali</h2>
            <h3><?php include '../controlador/get_user.php'; ?></h3>
        </div>

        <div class="navigation">
            <a class="navegacion__enlace" href="inicio.php">Inicio</a>
            <a class="navegacion__enlace" href="registro_estudiantes.php">Registro de estudiantes</a>
            <a class="navegacion__enlace navegacion__enlace--activo" href="listado_estudiantes.php">Listado de estudiantes</a>
            <a class="navegacion__enlace" href="listado_carreras.php">Consulta de carreras</a>
            <a class="navegacion__enlace" href="#">Administrar estudiantes</a>
        </div>
        <h2>Listado de Estudiantes</h2>
        <table>
            <tr>
                <th>Código</th>
                <th>Apellidos</th>
                <th>Nombre</th>
                <th>Género</th>
                <th>Programa</th>
                <th>Acciones</th>
            </tr>
            <?php include '../controlador/listado_estudiantes.php'; ?>
        </table>
        <a href="registro_estudiantes.php" class="btn">Agregar Estudiante</a>
    </div>
</body>
</html>
