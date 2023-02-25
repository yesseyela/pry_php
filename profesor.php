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
	<title>Formulario de registro de profesor</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<?php
    include 'navbar.php';
    ?>
    <h2> Formulario de registro de profesor </h2>
	<div class="container">
		<form action="agregar_estudiante.php" method="POST">
		
		  <div class="form-group">
			<label for="cedula">Cédula:</label>
			<input type="text" class="form-control" name="cedula" id="cedula">
		  </div>
	  
		  <div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" class="form-control" name="nombre" id="nombre">
		  </div>
	  
		  <div class="form-group">
			<label for="nivel_estudios">Nivel de estudios:</label>
			<select class="form-control" name="nivel_estudios" id="nivel_estudios">
			  <option value="Tecnico">Técnico</option>
			  <option value="Profesional">Profesional</option>
			  <option value="Maestria">Maestría</option>
			  <option value="Doctorado">Doctorado</option>
			</select>
		  </div>
	  
		  <div class="form-group">
			<label for="domicilio">Domicilio:</label>
			<input type="text" class="form-control" name="domicilio" id="domicilio">
		  </div>
	  
		  <button type="submit" class="btn btn-primary">Agregar docente</button>
		</form>
	  </div>
  
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>


</body>
</html>