<?php

    $name = "juan,maria,pepe,andrea,jorgelina,cecilia";
    $arrayDeNombresOrdenado = punto1($name);
    echo "<pre>";
    print_r($arrayDeNombresOrdenado);
    echo "</pre>";
    $posDelValorSiExiste = punto2($arrayDeNombresOrdenado, "juan");
    echo "<br/>";
    punto3($arrayDeNombresOrdenado, 5);

//Recibe un string, lo pasa array y hace revoleos
function punto1(string $name)
{

    $arrayDeNombres = explode(",", $name);
    echo "<pre>";
    print_r($arrayDeNombres);
    echo "</pre>";
    sort($arrayDeNombres);
    echo "<pre>";
    print_r($arrayDeNombres);
    echo "</pre>";
    $newArray = array();
    foreach ($arrayDeNombres as $nombre) {
        $nombre = ucfirst($nombre);
        $nombre = str_split($nombre);
        array_push($newArray, $nombre[0]);
    }
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
    $cantValores = count($newArray);
    echo "Cantidad de Elementos: " . $cantValores;
    $keys = ["0" => 0, "1" => 1, "2" => 2, "3" => 3, "4" => 4, "5" => 5];
    echo "<pre>";
    print_r($keys);
    echo "</pre>";
    $arrayAsociativo = array_combine($keys, $newArray);
    echo "<hr/>Array Asociativo<hr/>";
    echo "<pre>";
    print_r($arrayAsociativo);
    echo "</pre>";
    echo "<hr/>Punto 4<br/><br/>";
    $string = punto4($arrayAsociativo);
    echo $string;
    echo "<hr/>";
    
    return $arrayDeNombres;
}

//Recibe un array y un valor y lo busca
//Imprime por pantalla s existe o no:
function punto2($array, $valor) {
    $resultado = array_search($valor, $array, FALSE);
    if($resultado) {
        echo "El valor existe en el array y esta en la pos: " . $resultado; 
    }
    else {
        echo "El valor no existe en el array";
    }
    return $resultado;
}

//Recibe un array y una key y la busca
//Imprime por pantalla si existe o no:
function punto3($array, $key) {
    $resultado = array_key_exists($key, $array);
    if($resultado) {
        echo "La key '".$key."' existe en el array y contiene el valor = ".$array[$key];
    }
    else {
        echo "La key no existe en el array.";
    }
}

//Recibe un array, inverte Values y keys y lo devuelve como String separado x comas
function punto4($array) {
    //array_flip pierde datos si tienen el mismo valor
    //porque no puede haber dos keys iguales
    $array = array_flip($array);
    /* echo "<pre>";
    var_dump($array);
    echo "</pre>"; */
    $arrayToString = implode(",",$array);
    return $arrayToString;
}

?>