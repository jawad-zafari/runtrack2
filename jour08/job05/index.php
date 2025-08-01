<?php
session_start();

if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['current_player'] = 'X';
}

function check_winner($board) {
    // Vérifier les lignes
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] != '-' && $board[$i][0] == $board[$i][1] && $board[$i][1] == $board[$i][2]) {
            return $board[$i][0];
        }
    }
    
// Vérifier les colonnes
    for ($j = 0; $j < 3; $j++) {
        if ($board[0][$j] != '-' && $board[0][$j] == $board[1][$j] && $board[1][$j] == $board[2][$j]) {
            return $board[0][$j];
        }
    }
    
// Vérifiez les diagonales
    if ($board[0][0] != '-' && $board[0][0] == $board[1][1] && $board[1][1] == $board[2][2]) {
        return $board[0][0];
    }
    if ($board[0][2] != '-' && $board[0][2] == $board[1][1] && $board[1][1] == $board[2][0]) {
        return $board[0][2];
    }
    
    return null;
}

