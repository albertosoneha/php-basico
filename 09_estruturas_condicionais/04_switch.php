<?php
$value = readline(prompt: "Digite 1, 2 ou 3: ");

switch($value){
    case 1:
        echo"Voce digitou 1!\n";
        break;
    case 2:
        echo"Você digitou 2!\n";
        break;
    case 3:
        echo"Você digitou 3!\n";
        break;
        
    default:
        echo"VALOR INVÁLIDO!\n";
}