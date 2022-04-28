<?php
require('model/api.php');

$action    = isset($_POST['action']) ? $_POST['action'] : '';
$game_name = isset($_POST['game_name']) ? $_POST['game_name'] : '';

switch ($action) {
    case "add_game":
        $response = add_game($game_name);
        header("Location: .");
        break;
    default:
        $games = get_games();
        include('view/games_list.php');
}
