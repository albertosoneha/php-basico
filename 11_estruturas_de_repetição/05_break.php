<?php

    $numberOfMessages = (int) readline(prompt: 'Digite o número de mensagem a serem exibida: ');

    for($count = 0; $count < $numberOfMessages; $count++){
        echo"{$count}- Mensagem \n";

        if($count === 5){
            break;
        }
    }
