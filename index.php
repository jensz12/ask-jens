<?php

require 'vendor/autoload.php';

if (DEV)
	require 'config/dev.mysql.php';
else
	require 'config/mysql.php';

require 'inc/functions.php';

$klein = new \Klein\Klein();

//$klein->respond(function($request, //$response, $service) {
//	$service->cities = get_cities();
//	$service->layout('views/main.php');
//});

$klein->respond('GET', '/', function($request, $response, $service) {
	$service->title = 'Ask Jens';
	$service->render('views/front.php');
});

$klein->onHttpError(function ($code, $router) {
	if ($code == 404) {
		$service = $router->service();
		$service->title = '404 - Siden blev ikke fundet';
		$service->render('views/404.php');
	}
});

$klein->dispatch();
?>
