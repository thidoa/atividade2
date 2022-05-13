<?php

    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $media = 7;

    $resultado = ($nota1 + $nota2)/2;

    if($resultado >= $media) {
        echo $nome . " foi aprovado com média: " . $resultado . "<br>";
    } else {
        echo $nome . " foi reprovado com média: " . $resultado . "<br>";
    }

    echo "<a href='ex03.html'> Voltar </a>";
?>