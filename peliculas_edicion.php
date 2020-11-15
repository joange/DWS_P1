<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Película guardada</title>
</head>

<body>
<div class="alert alert-secondary d-flex">
        <a href="./peliculas.php" class="btn btn-dark">Películas</a>&nbsp;&nbsp;
</div>

<div class="container">

<h1>Edición de películas</h1>

<?php

include("./lib/utils.php");

 editar_pelicula($_GET);

 echo '<div class="card-body" style="margin: auto;background:lightgreen;width:50%;">';
 echo '<h4 style="color:darkgreen;"> Pelicula guardada con éxito </h4>';
 echo '</div>';

 

?>

<a href="javascript:history.back()"> Volver Atrás</a>
</div>

</body>

</html>