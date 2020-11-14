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
<div class="alert alert-success" role="alert">
            <!-- INCLUIR CÓDIGO PHP -->

<!-- Default form login -->
<form class="border border-light p-5" action="#!">

    <p class="h4 mb-3">Edició de Películes</p>


    <!-- Titol -->
    <label class="custom-control-label" for="defaultLoginFormRemember">Titulo</label>
    <input type="text" id="idTitulo" class="form-control mb-4" placeholder="Titol">

    <!-- Any -->
    <label class="custom-control-label" for="defaultLoginFormRemember">Anyo</label>
    <input type="number" id="idAny" class="form-control mb-4" placeholder="Anyo">

    <!-- Duració -->
    <label class="custom-control-label" for="defaultLoginFormRemember">Duracion</label>
    <input type="number" id="idDurada" class="form-control mb-4" placeholder="Duración">




    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Guardar</button>


</form>

</body>

</html>