<?php
require('model/api.php');

$action    = isset($_POST['action']) ? $_POST['action'] : '';
$game_name = isset($_POST['game_name']) ? $_POST['game_name'] : '';
$game_id   = isset($_POST['game_id']) ? $_POST['game_id'] : '';

switch ($action) {
    case "add_game":
        $response = add_game($game_name);
        header("Location: .");
        break;
    case "Upvote":
        $response = upvote($game_id);
        header("Location: .");
        break;
    case "Downvote":
        $response = downvote($game_id);
        header("Location: .");
        break;
    case "Remove":
        $response = remove($game_id);
        header("Location: .");
        break;
    default:
        $games = get_games();
        include('view/games_list.php');
}
