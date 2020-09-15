 <?php
        //1.a. Increiblemente suma string con int
        $myNumber = 123;
        $myNumberString = "123";
        echo $myNumber + $myNumberString;
        //1.b Tambien hace lo mismo
        echo "<hr/>";
        echo $myNumberString - $myNumber;
        //1.c El punto funciona como concatenador
        echo "<hr/>";
        echo $myNumber.$myNumberString;
        
        //2.a Funciona comparando numeros con String
        echo "<hr/>";
        if(1=="1"){
            echo "its right";
        }
        //2.b Tres iguales not found (NO APARECE NADA)
        echo "<hr/>";
        if(1==="1"){
            echo "its right";
        }
        //2.c Funciona la palabra reservada null
        echo "<hr/>";
        if(!null){
            echo "its right";
        }
        //2.d Imprime, porque es true
        echo "<hr/>";
        if(!false) {
            echo "its right";
        }
        //2.e Se rompe(NO APARECE NADA)
        echo "<hr/>";
        if(""){
            echo "its right";
        }
        //2.f funciona(?)
        echo "<hr/>";
        if(" ") {
            echo "its right";
        }
        //2.g Imprime
        echo "<hr/>";
        if("tested") {
            echo "its right";
        }
        //2.h No imprime
        if(1-1){
            echo "its right";
        }

        //3. funciones de multiplicar y dividir
        echo "<hr/>";
        function multiplicar($valor1, $valor2) {

            $resultado = 0;
            if($valor1 == 0 || $valor2 == 0) {
                $resultado = 0;
            }
            else {
                $resultado = $valor1 * $valor2;
            }
            return $resultado;
        }
        echo multiplicar(2,2);
        
        echo "<hr/>";
        function dividir($dividendo, $divisor) {
            $resultado = 0;
            if($divisor == 0) {
                echo "No se puede dividir por cero";
                $resultado = null;
            }
            else {
                $resultado = $dividendo/$divisor;
            }
            return $resultado;
        }
        
        echo dividir(0, 10);

        //4. Todo se almacena en el 1

        /* $array = [  
            1     => "first value",
            "1"  => "second value",    
            1.2  => "tirth value",    
            true => "fourth value",    
            1+0.2 => "fifth value",    
            false !== null => "sixth value", 
        ];

        echo "<pre>";
        print_r($array);

        echo "</pre>"; */

        //5.a

        $people = [ 
            ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
            ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
            ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
            ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
            ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
            ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
            ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
        ];

        echo "<pre>";
        print_r($people);
        echo "</pre>";

        echo "<hr/><b>MAYORES DE 18</b><hr/>";

        echo "<pre>";
        $cont = 0;
        foreach($people as $person) {
            foreach($person as $age) {
                if($age>=18) {
                    echo ($cont+1).") "; 
                    print_r($person);
                    $cont = $cont + 1;
                }
            }

        }
        echo "</pre>";

        //5.b
        echo "<hr/><b>MUJERES MAYORES DE 18</b><hr/>";
        echo "<pre>";
        $cont = 0;
        $arrayMenores = [];
        foreach($people as $person) {
            foreach($person as $age) {
                if($age>=18) {
                  array_push($arrayMenores, $person);
                }
            }

        }
        foreach($arrayMenores as $person) {
            foreach($person as $sex){
                if($sex == "f") {
                    echo ($cont+1). ") ";
                    print_r($person);
                    $cont = $cont+1;
                }
            }
        }
        echo "<pre>";

        //5.c
        $arrayMujeresMenores = [];
        foreach($arrayMenores as $person) {
            foreach($person as $sex){
                if($sex == "f") {
                    array_push($arrayMujeresMenores, $person);
                }
            }
        }

        echo "</pre>";
        echo "<hr/><b>MUJERES MAYORES EN TABLA</b><hr/>";
        //Cierro php para poder utilizar tags de html mas correctamente
        ?>
        
        <table border="1"> <!-- defino una tabla -->

        <style>
            table {
                width: 300px;
                height: 200px;
            }

            b{
                font-size: 30px;
                font-family: "Times New Roman";
            }

        </style>

        <?php
        //Reabro PHP para iterar el array con funciones de php  
        foreach ($arrayMujeresMenores as $person) :
            ?> <!-- Cierro php para definir una fila de la tabla -->
            <tr> <!-- defino una fila de la tabla -->
            <?php
            foreach($person as $valor) :
            ?>
                <td><?php echo $valor; ?></td> 
                <!-- Defino una celda de la tabla y  -->
                <!-- abro php para imprimir la variable. -->
            <?php
            endforeach
            ?>
            </tr>
        <?php

            endforeach;
            ?>

        </table>
        
        <!-- //5.d -->
        <?php
            echo "<hr/><b>ARRAY DE EDADES</b><hr/>";
            $arrayDeEdades = [];
            foreach($people as $person) {
                    array_push($arrayDeEdades, $person["age"]);
            }

            echo "<pre>";

            var_dump($arrayDeEdades);

            echo "</pre>";


        //6. 

        require_once "imprimirDiaDeLaSemana.php";

        //7. 

        echo "<hr/><b>FORMULARIO PT7</b><hr/>";
        require_once "formpt7.php";

        //8.

        echo "<hr/><b>FORMULARIO PT8</b><hr/>";
        require_once "formpt8.php";


            
        ?>

        