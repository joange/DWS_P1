<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Películas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<?php
include("./lib/utils.php");


?>

<body>
    <div class="alert alert-secondary d-flex">
        <a href="./peliculas.php" class="btn btn-dark">Películas</a>&nbsp;&nbsp;
    </div>
    <div class="container">
        <div class="row mx-auto">
            <!-- INCLUIR CÓDIGO PHP -->
            <?php

            function editarPeli($id){
                echo "editant $id"; 
            }

            function eliminarPeli($id){
                echo "eliminant $id";
            }

            $lesPelis=readPelis("./bbdd/peliculas.csv");

            foreach ($lesPelis as $peli) {
                echo '<div class="card-body" style="width: 20%;">';
                echo '<img class="card-img-top" width="200px" src="./imgs/' . $peli["id"] . '.jpg" />';
                echo '<h4 class="card-title text-center">' . $peli["Titulo"] . '</h4>';

                //echo '<input type="submit" name="Editar">';
                //echo '<input type="submit" name="Eliminar">';
                
                echo '<div class="btn-group">';
                echo '<button class="btn btn-primary ml-3"><a href="peliculas_edicion.php?id=' . $peli["id"] . '">Editars</a></button>';
                echo '<button class="btn btn-danger ml-3" data-toggle="modal" onclick="eliminarPeli(' . $peli["id"] . ')">Eliminar</button>';
                echo '</div>';

                echo '</div>';

                // echo $peli["Titulo"] . "<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>