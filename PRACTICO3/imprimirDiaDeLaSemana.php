<?php
        setlocale(LC_ALL, "es_ES");
        $diaDeHoy = date("D");
        echo "El dia de hoy es:  " . $diaDeHoy;
        if($diaDeHoy == "Sun" || $diaDeHoy == "Sat") {
                echo "\nEs fin de semana";
        }
        else {
                echo "\nNo es fin de semana";
        }

?>