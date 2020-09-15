<?php
    $a = $_POST["num1"];
    $b = $_POST["num2"];
    $c = $_POST["num3"];
    $d = $_POST["num4"];

    $mayor = $a;

    if($b>$mayor) {
        $mayor = $b;
    }
    if($c>$mayor) {
        $mayor = $c;
    }
    if($d>$mayor) {
        $mayor = $d;
    }

    echo "El numero mayor es: ".$mayor;



?>