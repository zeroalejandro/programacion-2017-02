<?php
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();
	
$app->get('/clima/{id}', function($id) use($app) {
	$client = new GuzzleHttp\Client(['base_uri' => 'http://api.openweathermap.org']);
	$response = $client->get('http://api.openweathermap.org/data/2.5/forecast/city?id=4398103&APPID=98b29e5341cf645bbad39879110c608d');
	$body = $response-> getBody();
	});
$app->run();
?>