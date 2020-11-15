<?php


define("fileActores","./bbdd/actores.csv");
define("fileDirectores","./bbdd/directores.csv");
define("fileP_A","./bbdd/pelicula_actor.csv");
define("fileP_D","./bbdd/pelicula_director.csv");
define("filePeliculas","./bbdd/peliculas.csv");

/**
 * Función que a partir del nombre de fichero lee la información de TODAS
 * las películas
 */
function readPelis() {

    $field_names = array("id", "Titulo", "Anyo", "Duracion");

    $lesPelis=array();

    if (($f = @fopen(filePeliculas, "r"))!==false) {

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
function readDirectores() {

    $field_names = array("id", "nombre", "anyo", "pais");

    $elsDirectors=array();

    if (($f = @fopen(fileDirectores, "r"))!==false) {

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
function readActores() {

    $field_names = array("id", "nombre", "anyo", "pais");

    $elsActors=array();

    if (($f = @fopen(fileActores, "r"))!==false) {

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
function readActor($idActor) {

    $field_names = array("id", "nombre", "anyo", "pais");

    $actor=array();
    
    if (($f = @fopen(fileActores, "r"))!==false) {

        while (($arrayFila = fgetcsv($f, 1000, ",")) !== FALSE) {
            if ($arrayFila[0]==$idActor){
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
function readDirector( $id) {

    $field_names = array("id", "nombre", "anyo", "pais");

    $director=array();

    if (($f = @fopen(fileDirectores, "r"))!==false) {

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

function readPeli($id) {

    $field_names = array("id", "titulo", "anyo", "duracion");

    if (($f = @fopen(filePeliculas, "r"))!==false) {

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
function getDirectoresPeli($idPeli) {

    $directores=array();

    if (($f = @fopen(fileP_D, "r"))!==false) {

        while (($arrayFila = fgetcsv($f, 1000, ",")) !== FALSE) {
            if ($arrayFila[0]==$idPeli){
                $director=readDirector($arrayFila[1]);
                array_push($directores,$director);
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

    if (($f = @fopen(fileP_A, "r"))!==false) {

        while (($arrayFila = fgetcsv($f, 1000, ",")) !== FALSE) {
            if ($arrayFila[0]==$idPeli){
                array_push($actores,$arrayFila[1]);
            }
        }
        
    }
    fclose($f);

    $nombreActores=array();

    foreach ($actores as $act){
        $actor=readActor($act);
        array_push($nombreActores,$actor);
    }
    

    return $nombreActores;  
}

/**
 * Función que a partir del nombre de fichero lee la información de TODAS
 * las películas
 */
function deletePeli($idPeli) {

    // llegim totes les pelis
    $lesPelis=readPelis();

    // obrim el fitxer de pelis per a escriptura. 
    $f = fopen(filePeliculas, "w");

    foreach($lesPelis as $peli){

        // la peli que volem borrar no la escrivim
        if ($peli["id"]==$idPeli){
            continue;
        }

        //convertim $peli (array asociatiu) en array

        $valors_peli=array();
        foreach($peli as $k=>$v){
            array_push($valors_peli,$v);
        }

        //escrivim al fitxer
        fputcsv($f,$valors_peli,",");

    }

    fclose($f);
    

    
    
}

function editar_pelicula($peliActual){
    //Array ( [id] => 3 [titulo] => Senderos de gloria [anyo] => 1957 [duracion] => 87 ) 
    // leemos todas las pelis, y las volcamos al fichero menos la pasada como argumento

    $lesPelis=readPelis();

    // obrim el fitxer de pelis per a escriptura. 
    $f = fopen(filePeliculas, "w");

    foreach($lesPelis as $peli){

        // guardem la peli llegida o l'actual, si és el cas
        if ($peli["id"]==$peliActual["id"]){
            $p=$peliActual;
        }
        else{
            $p=$peli;
        }

        //convertim $peli (array asociatiu) en array

        $valors_peli=array();
        foreach($p as $k=>$v){
            array_push($valors_peli,$v);
        }

        //escrivim al fitxer
        fputcsv($f,$valors_peli,",");

    }

    fclose($f);
        
    

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
