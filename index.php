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


$klein->respond('GET', '/dbtest', function($request, $response, $service) {

  $mysqli = new mysqli('localhost' , 'themidnight_aj' , ')@o1[Lvab%.7' , 'themidnight_aj');
  $mysqli->set_charset('utf8');

  if ($mysqli->connect_errno)
    die('DB Connection failed, try again later');

  $sql = 'SELECT * FROM articles ORDER BY date ASC';
  $result = $mysqli->query($sql);
 
  $articles = []; 


  $service->title = 'DB Test';
  $service->articles = $articles; 
	$service->render('views/dbtest.php');
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
