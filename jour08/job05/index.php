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

if (isset($_POST['reset'])) {
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['move'])) {
    $move = explode(',', $_POST['move']);
    $i = $move[0];
    $j = $move[1];
    
    if ($_SESSION['board'][$i][$j] == '-') {
        $_SESSION['board'][$i][$j] = $_SESSION['current_player'];
        $_SESSION['current_player'] = ($_SESSION['current_player'] == 'X') ? 'O' : 'X';
    }
}

$winner = check_winner($_SESSION['board']);
$is_draw = true;
foreach ($_SESSION['board'] as $row) {
    if (in_array('-', $row)) {
        $is_draw = false;
        break;
    }
}
?>

<?php if ($winner): ?>
    <h2><?= $winner ?> a gagné !</h2>
    <form method="post">
        <button type="submit" name="reset">Nouveau jeu</button>
    </form>
<?php elseif ($is_draw): ?>
    <h2>Égal !</h2>
    <form method="post">
        <button type="submit" name="reset">Nouveau jeu</button>
    </form>
