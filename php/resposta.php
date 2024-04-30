<?php
    // COMENTÁRIO
    # COMENTÁRIO
    /* COMENTÁRIO
        vjjhjggjk */
    $nome = $_POST['nome'];
    echo 'Seja bem-vinda,' .$nome.'!'; // echo = print  
    // . (PONTO) é o sinal de concatenação no PHP
    echo "Seja bem-vinda, $nome!"; // pode ser assim com " " (aspas duplas) ou da maneira 
    // acima com ' '(aspas simples)

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    $sub = $valor1 - $valor2;
    $mult = $valor1 * $valor2;
    $div = $valor1 / $valor2;

    echo "<p>Soma = $soma</p>"; // tudo que o servidor responde é HTML <p> parágrafo
    echo "<p>Subtração = $sub</p>";
    echo "<p>Multiplicação = $mult</p>";
    echo "<p>Divisão = $div</p>";

    if ($soma > 0){
        echo "Soma maior que zero!";
    } elseif ($soma <0 ){
        echo "Soma menor que zero!";
    } else {
        echo "Soma igual a zero!";
    }

    switch ($soma){
        case 0:
            echo "Igual a zero!";
            break;
        case 1:
            echo "Igual a um!";
            break;
        case 2:
            echo "Igual a dois!";
            break;
        default:
            echo "Outra opção!";
            break;
    }

    if ($sub == 0)
        echo "Igual a zero!";
    else
        echo "Diferente de zero!";

    echo $mensagem = $sub == 0 ? "Igual a zero!" : "Diferente de zero!"; //operador ternário: é a mesma lógica acima 
    // com if e else simples

    if (($soma == 0) && ($sub == 0) || (!$mult)){
        echo "Exibindo mensagem!";
    }

    $i = 0;
    while($i<10){
        echo $i;
        $i++;
    }

    for($i=0;$i<10;$i++){
        echo $i;
    }


