<?php

function get_games()
{
    $url = 'https://codechallenge.essensedesigns.info/games/list';

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $server_response = curl_exec($curl);

    curl_close($curl);

    $server_response = json_decode($server_response, true);

    return $server_response;
}

function add_game($game_name)
{
    $params = ['name' => $game_name];

    $url = 'https://codechallenge.essensedesigns.info/games/add';

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $params);

    $server_response = curl_exec($curl);

    curl_close($curl);

    $server_response = json_decode($server_response, true);

    return $server_response;
}

function upvote($game_id)
{
    $params = ['id' => $game_id];

    $url = 'https://codechallenge.essensedesigns.info/games/vote';

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $params);

    $server_response = curl_exec($curl);

    curl_close($curl);

    $server_response = json_decode($server_response, true);

    return $server_response;
}

function downvote($game_id)
{
    $params = ['id' => $game_id];

    $url = 'https://codechallenge.essensedesigns.info/games/removeVote';

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $params);

    $server_response = curl_exec($curl);

    curl_close($curl);

    $server_response = json_decode($server_response, true);

    return $server_response;
}

function remove($game_id)
{
    $params = ['id' => $game_id];

    $url = 'https://codechallenge.essensedesigns.info/games/remove';

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $params);

    $server_response = curl_exec($curl);

    curl_close($curl);

    $server_response = json_decode($server_response, true);

    return $server_response;
}
