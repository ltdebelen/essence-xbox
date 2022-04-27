<?php
require('model/api.php');

switch ($action) {
    default:
        $games = get_games();
        include('view/games_list.php');
}
