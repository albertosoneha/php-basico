<?php

    require_once __DIR__ . '/constants.php';
    require_once __DIR__ . '/variables.php';
    require_once __DIR__ . '/getPlayersName.php';
    require_once __DIR__ . '/buildBoard.php';
    require_once __DIR__ . '/showBoard.php';
    require_once __DIR__ . '/isPositionCorrect.php';
    require_once __DIR__ . '/validate.php';
    require_once __DIR__ . '/isBoardFull.php';
    require_once __DIR__ . '/swapPlayer.php';
    require_once __DIR__ . '/showWinner.php';
    require_once __DIR__ . '/playAgain.php';

 do {
        $players = getPlayersName();
        $player = PLAYER_ONE_ICON;
        $board = buildBoard();
        $winner = null;

     while ($winner === null) {
        echo showBoard(board: $board);
        $position = (int) readline(prompt: "Player {$player}, digite a sua posição: "); 

        if(!isPositionCorrect(position: $position, board: $board)) {
           continue;
        }

        $board[$position] = $player;

        if(validate(board: $board, player: PLAYER_ONE_ICON)) {
            $winner = PLAYER_ONE_ICON;
        } elseif(validate($board, player: PLAYER_TWO_ICON)){
            $winner = PLAYER_TWO_ICON;
        } else{
            $winner = null;
        }

        if (isboardFull(board: $board)) {
            break;
        }

        $player = swapPlayer(player: $player);
    }

        echo showBoard(board: $board);
        echo showWinner(winner: $winner, players: $players);

        $playAgain = playAgain();

        echo"\n";
    } while ($playAgain === true);
