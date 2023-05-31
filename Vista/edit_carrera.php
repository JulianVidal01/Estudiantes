<!DOCTYPE html>
<html>
<head>
  <title>Edición de Carreras</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="container-2">
    <div class="edit_general">
        <h2>Editar carrera</h1>
            <h2>Registro y consulta de estudiantes de Cali</h2>
            <h3><?php include '../controlador/get_user.php'; ?></h3>
        </div>

        <br>

        <div class="navigation">
            <a class="navegacion__enlace" href="inicio.php">Inicio</a>
            <a class="navegacion__enlace" href="registro_estudiantes.php">Registro de estudiantes</a>
            <a class="navegacion__enlace" href="listado_estudiantes.php">Listado de estudiantes</a>
            <a class="navegacion__enlace navegacion__enlace--activo" href="listado_carreras.php">Consulta de carreras</a>
            <a class="navegacion__enlace" href="#">Administrar estudiantes</a>
        </div>
    <form action="../controlador/editar_carrera.php" method="POST">
      <label class="label-registro" for="carrera_id">ID de Carrera:</label>
      <input class="input-registro" type="text" id="carrera_id" name="id" required> <br>

      <label class="label-registro" for="nombre">Nombre de la Carrera:</label>
      <input class="input-registro" type="text" id="nombre" name="nombre" required> <br>

      <button type="submit" name="guardar">Guardar</button>
    </form>
  </div>
</body>
</html>
