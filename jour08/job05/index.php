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
    
