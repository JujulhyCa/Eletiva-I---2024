<?php
    /* 2. Escreva um programa que leia 7 números diferentes, imprima o menor valor 
    e imprima a posição do menor valor na sequência de entrada.*/

    $valor = $_POST['valor1'];
    $menor = $valor;
    $aux = 1;

    if($menor <= $valor2){
        $menor = $valor2;
        $aux = 2;
    } elseif($menor <= $valor3){ 
         $valor = $valor3;
         $aux = 3;      
    } elseif($menor <= $valor4){
        $valor = $valor4;
        $aux = 4;
    } elseif($menor <= $valor5){
        $valor = $valor5;
        $aux = 5;
    } elseif($menor <= $valor6){
        $valor = $valor6;
        $aux = 6;
    } else{
        $valor = $valor7;
        $aux = 7;
    }

    echo "$menor é o menor valor, na posição $aux.";