<?php

require 'vendor/autoload.php';

$klein = new \Klein\Klein();

$klein->respond(function($request, $response, $service) {
	$service->layout('views/main.php');
});

$klein->respond('GET', '/', function($request, $response, $service) {
	$service->title = 'Ask Jens';
	$service->render('views/front.php');
});

$klein->onHttpError(function ($code, $router) {
	if ($code == 404) {
		$service = $router->service();
		$service->title = '404 - Page not found';
		$service->render('views/404.php');
	}
});

$klein->dispatch();
?>
