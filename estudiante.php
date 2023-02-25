<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>FORMULARIO PHP</title>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
	<title>Formulario de registro de estudiante</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
    include 'navbar.php';
    ?>
    <h2> Formulario de registro de estudiante </h2>
	<div class="container">
        <form action="agregar_estudiante.php" method="POST">
          <div class="form-group">
            <label for="codigo">Código:</label>
            <input type="text" class="form-control" name="codigo" id="codigo">
          </div>
      
          <div class="form-group">
            <label for="cedula">Cédula:</label>
            <input type="text" class="form-control" name="cedula" id="cedula">
          </div>
      
          <div class="form-group">
            <label for="genero">Género:</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="genero" value="Masculino" id="genero-m">
              <label class="form-check-label" for="genero-m">Masculino</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="genero" value="Femenino" id="genero-f">
              <label class="form-check-label" for="genero-f">Femenino</label>
            </div>
          </div>
      
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
          </div>
      
          <button type="submit" class="btn btn-primary">Agregar estudiante</button>
        </form>
      </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</body>
</html>