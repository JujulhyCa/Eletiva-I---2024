<?php
    /* Cálculo da média */

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $faltas = $_POST['faltas'];
    $media = ($n1+$n2+$n3+$n4)/4;

    // se a nota for abaixo de 6 e quantidade de faltas > 10 -> reprovado
    // senão aprovado

    if (($media >= 6) && ($faltas <= 10)) { // para um único comando a {} é opcional
        echo "Aprovado! <br/>";
    } else {
        echo "Reprovado. <br/>" ;
    }

    $vetor = array(10, 20, 30); // quando usamos "array" os índices são inteiros, forma clássica
    echo $vetor[1];

    $vetor[3] = 40; // 3 não é uma posição, é chamado de CHAVE
    echo "<br/>".$vetor[3];

    $vetor['~'] = "tio";
    echo "<br/>".$vetor['~']; //br para pular linha // .(ponto) é a concatenação

    echo "<br/> Valores do vetor: <br/>";

    foreach($vetor as $v){
        echo "$v <br/>";
    }

    foreach($vetor as $p => $v){ // posição seguida do valor
        echo "Posição $p = $v <br/>";
    }

    print_r($vetor); // outra forma de exibir o vetor