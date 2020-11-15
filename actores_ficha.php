<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Directores | Ficha</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <div class="alert alert-secondary d-flex">
        <a href="./peliculas.php" class="btn btn-dark">Películas</a>&nbsp;&nbsp;
    </div>
    <div class="container">
	<!-- INCLUIR CÓDIGO PHP -->


    <?php
    include("./lib/utils.php");

    $actorId=$_GET["id"];

    $actor=readActor($actorId);

    echo '<div class="card-body" style="margin: auto;background:LIGHTSKYBLUE;width:50%;">';
    echo '<b>Nombre</b>:'. $actor["nombre"] . '<br>';
    echo '<b>Anyo</b>:'. $actor["anyo"] . '<br>';
    echo '<b>Pais</b>:'. $actor["pais"] . '<br>';
    echo '</div>';

    ?>
    <a href="javascript:history.back()"> Volver Atrás</a>
    </div>
</body>

</html>