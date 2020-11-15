<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Borrar película</title>
</head>
<body>
<div class="alert alert-success" role="alert">
            <!-- INCLUIR CÓDIGO PHP -->

            <?php
        include("./lib/utils.php");

        
        $idPeli=$_GET["id"];

        deletePeli($idPeli) ;

        echo '<div class="card-body" style="margin: auto;background:lightgreen;width:50%;">';
        echo '<h4 style="color:darkgreen;"> Pelicula borrada con éxito </h4>';
        echo '</div>';

       
        ?>
        <a href="javascript:history.back()"> Volver Atrás</a>
    
</body>
</html>