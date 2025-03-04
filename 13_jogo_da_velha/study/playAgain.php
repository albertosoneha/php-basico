<?php

function playAgain(): bool
{
    $result = readline(prompt: "\nDeseja jogar novamente? (s/n): ");

    return $result === 'y' ? true: false;
}
