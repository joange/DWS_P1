<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Películas | Ficha</title>
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

        $peli=readPeli($_GET["id"]);
    
        $actores=getActoresPeli($_GET["id"]);

        $directores=getDirectoresPeli($_GET["id"]);

        echo '<div class="card-body" style="background:lavender;width:60%;margin: auto;">';
        echo '<b>Título</b>:'. $peli["titulo"] . '<br>';
        echo '<b>Anyo</b>:'. $peli["anyo"] . '<br>';
        echo '<b>Duracion</b>:'. $peli["duracion"] . '<br>';
        echo '<b>Director</b>:<br>';
        echo '<ul>';
        foreach ($directores as $dire){
            echo '<li><a href="./directores_ficha.php?id=' . $dire["id"] . '">' . $dire["nombre"] . '</a>';
        }
        echo '</ul>';
        echo '<b>Actores</b>:<br>';
        echo '<ul>';
        foreach ($actores as $actor){
            echo '<li><a href="./actores_ficha.php?id=' . $actor["id"] . '">' . $actor["nombre"] . '</a>';
        }
        echo '</ul>';
        echo '</div>';

    ?>

<a href="javascript:history.back()"> Volver Atrás</a>

    </div>
</body>

</html>