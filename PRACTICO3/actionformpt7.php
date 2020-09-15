<?php

    $typeSale = $_POST["typeSale"];
    $totalSale = $_POST["totalSale"];

    if($totalSale < 200.00) {
        if($typeSale == "mascotas") {
            echo "No se puede realizar el envio";
        }
        else if($typeSale == "ropa") {
            echo "Los gastos de envio son 80 pesos.";
        }
    }
    else if($totalSale<600) {
        echo "Los gastos de envio son 80 pesos.";
    }
    else if($totalSale < 2000) {
        echo "Los gastos de envio son gratis.";
    }
    else {
        echo "Obtuvo un cupon de desc: CODEDESC33";
    }





?>