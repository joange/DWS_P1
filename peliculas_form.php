<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edición de películas</title>
</head>

<body>

<div class="alert alert-secondary d-flex">
        <a href="./peliculas.php" class="btn btn-dark">Películas</a>&nbsp;&nbsp;
</div>

    <div class="container">
        <h1>Edición de películas</h1>
		 <!-- INCLUIR CÓDIGO PHP -->
        <?php

        $peli=unserialize($_GET["peli"]);

        ?>
        <form class="border border-light p-5" action="peliculas_edicion.php" method="get">

        <p class="h4 mb-3">Edició de Películes</p>


        <label>Id</label>
        <input type="text" id="idId" name="id" class="form-control mb-4"value="<?php echo $peli["id"];?>" readonly>


        <!-- Titol -->
        <label>Titulo</label>
        <input type="text" id="Titulo" name="titulo" class="form-control mb-4" placeholder="Titol" value="<?php echo $peli["Titulo"];?>">

        <!-- Any -->
        <label>Anyo</label>
        <input type="number" id="idAny" name="anyo" class="form-control mb-4" placeholder="Anyo" value="<?php echo $peli["Anyo"];?>">

        <!-- Duració -->
        <label>Duracion</label>
        <input type="number" id="idDurada" name="duracion" class="form-control mb-4" placeholder="Duración" value="<?php echo $peli["Duracion"];?>">

        <button class="btn btn-info btn-block my-4" type="submit">Guardar</button>


</form>

<a href="javascript:history.back()"> Volver Atrás</a>
    </div>

</body>

</html>