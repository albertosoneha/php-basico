<?php

/**
 * @param array<string> $board
 * @param string $player
 * @return boolean
 */ 
function validate(array $board, string $player): bool
{
  return ($board[0] === $player && $board[1] === $player && $board[2] === $player)||
         ($board[3] === $player && $board[4] === $player && $board[5] === $player)||
         ($board[6] === $player && $board[7] === $player && $board[8] === $player)||
         ($board[0] === $player && $board[3] === $player && $board[6] === $player)||
         ($board[1] === $player && $board[4] === $player && $board[7] === $player)||
         ($board[2] === $player && $board[5] === $player && $board[8] === $player)||
         ($board[0] === $player && $board[4] === $player && $board[8] === $player)||
         ($board[2] === $player && $board[4] === $player && $board[6] === $player);

    
}