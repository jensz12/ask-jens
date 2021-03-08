<?php
require 'vendor/autoload.php';
require 'inc/functions.php';

DB::$user = 'themidnight_aj';
DB::$password = ')@o1[Lvab%.7';
DB::$dbName = 'themidnight_aj';
DB::$encoding = 'utf8';

$klein = new \Klein\Klein();

$klein->respond(function($request, $response, $service) {
	$service->layout('views/main.php');
});

$klein->respond('GET', '/', function($request, $response, $service) {
	$service->title = 'Ask Jens';
	$service->articles = DB::query('SELECT * FROM articles ORDER BY date DESC');
	$service->render('views/front.php');
});

foreach (DB::query('SELECT * FROM articles WHERE URL IS NULL OR URL = ""') as $article) {
	$klein->respond('GET', '/'.slugify($article['headline']), function($request, $response, $service) {
		global $article;

		$service->title = $article['headline'];
		$service->article = $article;
		$service->render('views/article.php');
	});
}

$klein->onHttpError(function ($code, $router) {
	if ($code == 404) {
		$service = $router->service();
		$service->title = '404 - Page not found';
		$service->render('views/404.php');
	}
});

$klein->dispatch();
?>
