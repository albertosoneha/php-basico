<?php

/**
 * @param array<string> $board
 * @return string
 */
function showBoard(array $board): string
{
    return <<<EOL

      Posições: | Tabuleiro
     ------------------------
         0|1|2  | $board[0] $board[1] $board[2]
         3|4|5  | $board[3] $board[4] $board[5]
         6|7|8  | $board[6] $board[7] $board[8]
     ------------------------    

    EOL
    ;

}