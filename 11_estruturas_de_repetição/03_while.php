<?php

$value = 'Vermelho';

while($value !== 'verde'){
    echo"FIQUE PARADO!\n";

    $value  = readline(prompt: 'Digite vermelho, amarelo ou verde: ');
    
    
}
echo"CONTINUE!\n";  