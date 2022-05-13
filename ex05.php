<?php

    $vetor = array($_POST['numero1'], $_POST['numero2'], $_POST['numero3'], $_POST['numero4'], $_POST['numero5'], $_POST['numero6']);
    $numeropesquisa = $_POST['numeropesquisa'];
    $contador = 0;

    for($i = 0; $i < 6; $i++) {
        if($numeropesquisa == $vetor[$i]) {
            echo "Tem " . $numeropesquisa . " No vetor!<br>";
            $contador++;
            break;
        }
    }
    if($contador == 0) {
        echo "O valor " . $numeropesquisa . " não foi encontrado no vetor!<br>";
    }

    echo "<a href='ex05.html'> Pesquisar novamente</a>";
?>