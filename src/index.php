<?php

use GuzzleHttp\Client;
use Nadachi\WeatherMeet\utils\envTrait;

require_once './vendor/autoload.php';

envTrait::env();

$client = new Client([
    'base_uri' => getenv('API_BASE_URL'),
    'timeout' => 5.0,
    'query' => ['token' => getenv('TOKEN')],
]);

$request = $client->request('GET', 'weather/locale/' . getenv('STATE_TOKEN') . '/current');

var_dump($request->getBody()->getContents());