<?php

/**
 * @param array<string> $board
 * @return boolean
 */
function isBoardFull(array $board): bool
{
    if (in_array(needle: BLANK_ICON, haystack: $board)) {
        return false;
    } else {
        return true;
    }
}