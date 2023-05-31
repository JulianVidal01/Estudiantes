<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de estudiantes</title>
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
            <a class="navegacion__enlace navegacion__enlace--activo" href="registro_estudiantes.php">Registro de estudiantes</a>
            <a class="navegacion__enlace" href="listado_estudiantes.php">Listado de estudiantes</a>
            <a class="navegacion__enlace" href="listado_carreras.php">Consulta de carreras</a>
            <a class="navegacion__enlace" href="#">Administrar estudiantes</a>
        </div>

        <h2>Registro de estudiantes</h2>

        <form class="container-form" action="../vista/guardar_estudiante.php" method="post">
            <label class="label-registro" for="nombre">Nombre:</label>
            <input class="input-registro" type="text" id="nombre" name="nombre" required> <br>

            <label class="label-registro" for="apellidos">Apellido:</label>
            <input class="input-registro" type="text" id="apellidos" name="apellidos" required> <br>

            <label class="label-registro" for="id">Código:</label>
            <input class="input-registro" type="text" id="id" name="id" required> <br>

            <div>
                <label class="label-registro" for="genero">Género:</label>
                <input class="genero" type="radio" name="genero" value="Masculino" id="genero_masculino" required>
                <label class="genero-t" for="genero_masculino">Masculino</label>
                <input class="genero" type="radio" name="genero" value="Femenino" id="genero_femenino">
                <label class="genero-t" for="genero_femenino">Femenino</label>
            </div> <br>

            <label class="label-registro" for="id_grado">Programa:</label>
            <select name="id_grado" required>
                <option value="" disabled selected>Seleccionar programa</option>
                <?php include '../controlador/get_programas.php'; ?>
            </select> <br> <br> 

            <label class="label-registro" for="id_seccion">Sección:</label>
            <select name="id_seccion" required>
                <option value="" disabled selected>Seleccionar Sección</option>
                <?php include '../controlador/get_secciones.php'; ?>
            </select> <br> <br> 

            <button type="submit">Guardar</button>
            <button class="b-w"type="reset">Limpiar</button>
        </form>
    </div>
</body>
</html>
