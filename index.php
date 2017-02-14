<?php
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/clima', function() use($app) {
	return $app->json('Nombre: Alejandro Lopez Martinez Cuenta:414127560');
});
$app->run();
?>