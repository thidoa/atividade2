<?php

    $chute = $_POST['chute'];
    $numeroSorteado = rand(1, 10);


    if($numeroSorteado == $chute) {
        echo "Parabens, você acertou, o número sorteado foi " . $numeroSorteado;
        echo "<a href='ex02.html'> Jogue novamente </a>";
    } else {
        echo "Você errou, o número sorteado foi " . $numeroSorteado . "<br>";
        echo "<a href='ex02.html'> Tente novamente </a>";
    }

?>