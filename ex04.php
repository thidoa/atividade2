<?php

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operador = $_POST["operador"];

    if($operador == "+") {
        $total = $numero1 + $numero2;
    } else if ($operador == "-"){
        $total = $numero1 - $numero2;
    } else if ($operador == "*") {
        $total = $numero1 * $numero2; 
    }else if ($operador == "/"){
        $total = $numero1 / $numero2;
    }
    echo "O resultado de " . $numero1 . " " . $operador . " " . $numero2 . " é " . $total . "<br>";

    echo "<a href='ex04.html'> Voltar</a>";

?>