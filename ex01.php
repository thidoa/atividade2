<?php

    $nome = $_POST['nomepiloto'];
    $distancia = $_POST['distancia'];
    $tempo = $_POST['tempo'];

    $vm = $distancia/$tempo;
    echo "A velocidade média do" . $nome . " foi " . $vm . "km/h<br/>";

    echo "<a href='ex01.html'> Voltar </a>";

?>