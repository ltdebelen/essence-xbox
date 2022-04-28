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
