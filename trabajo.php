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
	<title>Formulario de registro de trabajo final de grado</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<?php
    include 'navbar.php';
    ?>
    <h2> Formulario de registro de trabajo final de grado </h2>
	<div class="col-12">
        <div class="row">
            <div class="col-6">
                <form action="agregar_estudiante.php" method="POST">
                <div class="form-group">
                    <label for="cedula">Codigo:</label>
                    <input type="text" class="form-control" name="codigo" id="codigo">
                </div>
            
                <div class="form-group">
                    <label for="titulo">Titulo:</label>
                    <input type="text" class="form-control" name="titulo" id="titulo">
                </div>
            
                <div class="form-group">
                    <label for="Modalidad">Modalidad</label>
                    <select class="form-control" name="modalidad" id="modalidad">
                        <option value="Pasantia">Pasantia</option>
                        <option value="Diplomado">Diplomado</option>
                        <option value="Tesis">Tesis</option>
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="">Fecha</label>
                    <input type="date" class="form-control" name="fecha" id="fecha">
                </div>
            
                <button type="submit" class="btn btn-primary">Agregar trabajo final</button>
                </form>
            </div>
            <div class="col-6">

            </div>
        </div>
    </div>
  
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>


</body>
</html>