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


<body>
    <div class="alert alert-secondary d-flex">
        <a href="./peliculas.php" class="btn btn-dark">Películas</a>&nbsp;&nbsp;
    </div>
    <div class="container">
        <div class="row mx-auto">
            <!-- INCLUIR CÓDIGO PHP -->
            <?php
            include("./lib/utils.php");

            $lesPelis=readPelis();

            foreach ($lesPelis as $peli) {
                echo '<div class="card-body" style="width: 20%;">';
                echo '<a href="peliculas_ficha.php?id=' . $peli["id"] . '">';
                echo '<img class="card-img-top" width="200px" src="./imgs/' . $peli["id"] . '.jpg" />';
                echo '</a>';
                echo '<h6 class="card-title text-center">' . $peli["Titulo"] . '</h6>';

                //echo '<input type="submit" name="Editar">';
                //echo '<input type="submit" name="Eliminar">';
                
                echo '<div class="btn-group">';
                echo "<button class='btn btn-primary ml-3'><a href='peliculas_form.php?peli=" . serialize($peli) . "' style='color:white;'>Editar</a></button>";
                
               // echo "<a href='vectorSerializado1.php?miArray=" . serialize($peli) . "'>ir</a>";
                
                echo "<button class='btn btn-danger ml-3'><a href='peliculas_borrado.php?id=" . $peli["id"] . "' style='color:white;'>Eliminar</a></button>";
                echo '</div>';
                
                echo '</div>';

                // echo $peli["Titulo"] . "<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>