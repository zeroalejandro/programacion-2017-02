
<?php
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/clima/{c}', function(&c) use($app) {
	
});
$app->run();
if($_GET["c"]==null) die();
$client = new GuzzleHttp\Client(['base_uri' => 'http://api.openweathermap.org']);
	$response = $client->get('http://api.openweathermap.org/data/2.5/forecast/city?id={$c}&APPID=98b29e5341cf645bbad39879110c608d');
	$body = $response-> getBody();


$app->run();


?>