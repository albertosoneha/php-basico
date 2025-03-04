<?php

function welcome():void
{

    $name = readline('Digite o seu nome: ');
    echo"Bem Vindo {$name}\n"; 

}
welcome();
welcome();
echo"\n";



function welcomeWithReturn(): string
{
    $name = readline('>>> digite seu nome: ');
    return ">>> Bem Vindo {$name}.\n";

}

$a = welcomeWithReturn();
$b = welcomeWithReturn();

echo $a;
echo $b;
echo welcomeWithReturn();