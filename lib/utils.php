<?php

/**
 * Función que a partir del nombre de fichero lee la información de TODAS
 * las películas
 */
function readPelis($filename) {

    $field_names = array("id", "Titulo", "Anyo", "Duracion");

    $lesPelis=array();

    if (($f = @fopen($filename, "r"))!==false) {

      //  echo "fitxer obert";
        
        $dades_peli = array();

        while (($arrayFila = fgetcsv($f, 1000, ",")) !== FALSE) {
            $peli=array_combine( $field_names, $arrayFila ) ;
            array_push($lesPelis,$peli);
            // print_r($peli);

        }
        
    }

    fclose($f);
    return $lesPelis;  
}

/**
 * Función que a partir del nombre de fichero lee la información de TODOS
 * los directores
 */
function readDirectores($filename) {

    $field_names = array("id", "nombre", "anyo", "pais");

    $elsDirectors=array();

    if (($f = @fopen($filename, "r"))!==false) {

      //  echo "fitxer obert";
        

        while (($arrayFila = fgetcsv($f, 1000, ",")) !== FALSE) {
            $direct=array_combine( $field_names, $arrayFila ) ;
            array_push($elsDirectors,$direct);
            // print_r($peli);

        }
        
    }
    fclose($f);
    return $elsDirectors;  
}

/**
 * Función que a partir del nombre de fichero lee la información de TODOS
 * los ACTORES
 */
function readActores($filename) {

    $field_names = array("id", "nombre", "anyo", "pais");

    $elsActors=array();

    if (($f = @fopen($filename, "r"))!==false) {

      //  echo "fitxer obert";

        while (($arrayFila = fgetcsv($f, 1000, ",")) !== FALSE) {
            $actor=array_combine( $field_names, $arrayFila ) ;
            array_push($elsActors,$actor);
            // print_r($peli);

        }
        
    }
    fclose($f);
    return $elsActors;  
}

/**
 * Función que a partir del nombre de fichero y su id, 
 * lee la información de UN SOLO actor
 */
function readActor($filename, $id) {

    $field_names = array("id", "nombre", "anyo", "pais");

    if (($f = @fopen($filename, "r"))!==false) {

        while (($arrayFila = fgetcsv($f, 1000, ",")) !== FALSE) {
            if ($arrayFila[0]==$id){
                $actor=array_combine( $field_names, $arrayFila ) ;
                break;
            }
        }
        
    }
    return $actor;  
}


/**
 * Función que a partir del nombre de fichero lee la información de US SOLO
 * los directores
 */
function readDirector($filename, $id) {

    $field_names = array("id", "nombre", "anyo", "pais");

    $director=array();

    if (($f = @fopen($filename, "r"))!==false) {

        while (($arrayFila = fgetcsv($f, 1000, ",")) !== FALSE) {
            if ($arrayFila[0]==$id){
                $director=array_combine( $field_names, $arrayFila ) ;
                break;
            }
        }
        
    }
    fclose($f);
    return $director;  
}

/**
 * Función que a partir del id de la peli, devuelve la información de 
 * esa película INDIVIDUAL
 */

function readPeli($filename,$id) {

    $field_names = array("id", "Titulo", "Anyo", "Duracion");

    if (($f = @fopen($filename, "r"))!==false) {

      //  echo "fitxer obert";
        
        $dades_peli = array();

        while (($arrayFila = fgetcsv($f, 1000, ",")) !== FALSE) {
            if ($arrayFila[0]==$id){
                $peli=array_combine( $field_names, $arrayFila ) ;
                break;
            }
        }
        
    }
    fclose($f);
    return $peli;  
}

/**
 * Devuelve el nombre de los directores de una película dada
 */
function getDirectoresPeli($id) {

    $directores=array();

    if (($f = @fopen("./bbdd/directores.csv", "r"))!==false) {

        while (($arrayFila = fgetcsv($f, 1000, ",")) !== FALSE) {
            if ($arrayFila[0]==$id){
                array_push($directores,$arrayFila[1]);
            }
        }
        
    }
    fclose($f);
    return $directores;  
}


/**
 * Dado el Id de una peli, obtenemos los nombres de actores que han participado en ella
 */
function getActoresPeli($idPeli) {

    $actores=array();

    if (($f = @fopen("./bbdd/pelicula_actor.csv", "r"))!==false) {

        while (($arrayFila = fgetcsv($f, 1000, ",")) !== FALSE) {
            if ($arrayFila[0]==$idPeli){
                array_push($actores,$arrayFila[1]);
            }
        }
        
    }
    fclose($f);

    $nombreActores=array();

    foreach ($actores as $act){
        $actor=readActor("./bbdd/actores.csv",$act);
        array_push($nombreActores,$actor["nombre"]);
    }
    

    return $nombreActores;  
}
/**

 * utils.php, deberá contener al menos:
 *  •Una función que lea de csv
 *  •Una  función  guarde  los  datos  de  una  película  editada  en  el  fichero  peliculas.csv, 
 *   teniendo en cuanta que no se pueden borrar el resto de datos
 * •Una función que borre los datos de una película en el fichero peliculas.csv
 * •Una función que obtenga los directores de una película
 * •Una función que obtenga los actores de una película
 * 
 * Opcional,  las  funciones  que  sean  necesarias  para  convertir  los 
 *  arrays  obtenidos  de  la lectura desde fichero a arrays asociativos.
 */
?>
