<?php

do {
    $playerOne = readline(prompt: 'Player 1 (x) - Digite o seu nome: ');
    $playerTwo = readline(prompt: 'Player 2 (o) - Digite o seu nome: ');

    $player = "X";

    $board = [
        '.', '.', '.',
        '.', '.', '.',
        '.', '.', '.',
    ];

    $winner = null;

    while ($winner == null) {
        echo <<<EOL
            Posições: | Tabuleiro
             0|1|2    |   $board[0] $board[1] $board[2]
             3|4|5    |   $board[3] $board[4] $board[5]
             6|7|8    |   $board[6] $board[7] $board[8]

            EOL
        ;

        $position = (int) readline(prompt: "Player {$player}, digite a sua posição: "); 

        if (!in_array(needle: $position, haystack: [0, 1, 2, 3, 4, 5, 6, 7, 8])){
            echo"\nPosição inexistente, digite novamente.\n";
            continue;
        }

        if ($board[$position] !== '.'){
            echo"\nPosicão oucupada, digite novamnte.\n";
            continue;

        }

        $board[$position] = $player;

        if (
            ($board[0] === 'X' && $board[1] === 'X' && $board[2] === 'X')||
            ($board[3] === 'X' && $board[4] === 'X' && $board[5] === 'X')||
            ($board[6] === 'X' && $board[7] === 'X' && $board[8] === 'X')||
            ($board[0] === 'X' && $board[3] === 'X' && $board[6] === 'X')||
            ($board[1] === 'X' && $board[4] === 'X' && $board[7] === 'X')||
            ($board[2] === 'X' && $board[5] === 'X' && $board[8] === 'X')||
            ($board[0] === 'X' && $board[4] === 'X' && $board[8] === 'X')||
            ($board[2] === 'X' && $board[4] === 'X' && $board[6] === 'X')

        ) {
            $winner = 'X';
            break;
        }

        if ( 
            ($board[0] === 'O' && $board[1] === '0' && $board[2] === '0')||
            ($board[3] === '0' && $board[4] === '0' && $board[5] === '0')||
            ($board[6] === '0' && $board[7] === '0' && $board[8] === '0')||
            ($board[0] === '0' && $board[3] === '0' && $board[6] === '0')||
            ($board[1] === '0' && $board[4] === '0' && $board[7] === '0')||
            ($board[2] === '0' && $board[5] === '0' && $board[8] === '0')||
            ($board[0] === '0' && $board[4] === '0' && $board[8] === '0')||
            ($board[2] === '0' && $board[4] === '0' && $board[6] === '0')
        ) {
            $winner = 'O';
            break;
        }

        if (!in_array(needle: '.', haystack: $board)) {
            break;
        }

        if ($player == 'X') {
            $player = 'O';

        } else {
            $player = 'X';
        }
    }

    echo <<<EOL
    Posições: | Tabuleiro
              |    $board[0]|$board[1]|$board[2]
       0|1|2  |    $board[3]|$board[4]|$board[5] 
       3|4|5  |    $board[6]|$board[7]|$board[8] 
       6|7|8  |  
    
    EOL
    ;

    if ($winner = 'X') {
        echo"VENCEDOR: {$playerOne}.\n";

    } elseif ($winner = 'O'){
        echo"VENCEDOR: {$playerTwo}\n";

    } else {
        echo"EMPATE\n";
    }

    $playAgain = filter_var(value: readline(prompt: "\nDeseja jogar novamente? (true/false): "), filter: FILTER_VALIDATE_BOOLEAN);

    echo"\n";

} while ($playAgain === true);
