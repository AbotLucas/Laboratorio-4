<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Sintaxis Básica</h1>

    <?php

        //en php no hay tipado de variables
        $text = "Hola mundoo";
        $nombre = "Adrian";
        //Para concatenar strings se usa el "." (punto)
        $text = $text.$nombre;
        //Demostramos que no tienen tipo las variables:
        $text = 123; //Imprime por pantalla "123"
        

        //La funcion echo sirve para mostrar por pantalla
        echo $text;

        //Funciones:

        function prueba() {
            //Las variables son locales
            //A menos que las envie por parametro no las reconocerá
            $text = "DentroDeLaFuncion";
            echo $text;
        }
    
        prueba();
    

        //declaracion de arrays y loops:
        //Los arrays pueden ser pisados por otros tipos de dato
        $array = array();
        $array2 = [];

        //agrega dato en la primer posicion vacia.
        $array[] = "PrimerDatoDelArray";
        $array[] = "SegundoDatoDelArray";
        //Podemos usar nuestras propias Key para el array
        $array["index"] = "CuartoDatoDelArray";
        $array[$text] = "QuintoDatoDelArray";

        //imprimir array:
        //Etiqueta pre de html enviada mediante echo preformatea el modo de msotrar el array
        echo '<pre>';
        //Esta muestra mucho detalle pero molesta
        var_dump($array); //vardump muestra null si esta nulo el array
        //Muestra solo dato y ubicacion en el array o key
        print_r($array); //no muestra si es null
        echo '</pre>';

/*         foreach($array) {
            echo;
        }
 */


    ?>

    <hr/>

    <?php

        echo "Mas Php"

    ?>
    
</body>
</html>