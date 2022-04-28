<?php

function curl($method, $params = false)
{
    $url = 'https://codechallenge.essensedesigns.info/games/' . $method;
    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    if ($params) {
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
    }

    $server_response = curl_exec($curl);

    curl_close($curl);

    $server_response = json_decode($server_response, true);

    return $server_response;
}

function get_games()
{
    return curl('list');
}

function add_game($game_name)
{
    $params = ['name' => $game_name];
    return curl('add', $params);
}

function upvote($game_id)
{
    $params = ['id' => $game_id];
    return curl('vote', $params);
}

function downvote($game_id)
{
    $params = ['id' => $game_id];
    return curl('removeVote', $params);
}

function remove($game_id)
{
    $params = ['id' => $game_id];
    return curl('remove', $params);
}
