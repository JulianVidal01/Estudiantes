<!DOCTYPE html>
<html>
<head>
  <title>Edición de Estudiantes</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="container-2">
    <div class="edit_general">
        <h2>Editar carrera</h1>
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

        <br>
        <br>
    <form action="../controlador/editar_estudiante.php" method="POST">
      <label class="label-registro" for="id">ID de Estudiante:</label> 
      <input class="label-registro" type="text" id="id" name="id" required> <br>

      <label class="label-registro" for="apellidos">Apellidos:</label>
      <input class="label-registro" type="text" id="apellidos" name="apellidos" required> <br>

      <label class="label-registro" for="nombre">Nombre:</label>
      <input class="label-registro" type="text" id="nombre" name="nombre" required> <br>

      <label class="label-registro" for="genero">Género:</label>
      <select id="genero" name="genero" required>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select> <br> <br>

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

      <button type="submit" name="guardar">Guardar</button>
    </form>
  </div>
</body>
</html>
