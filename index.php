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
	$service->desc = 'Ask Jens';
	$service->articles = DB::query('SELECT * FROM articles ORDER BY date DESC');
	$service->render('views/front.php');
});

foreach (DB::query('SELECT * FROM articles WHERE URL IS NULL OR URL = ""') as $article) {
	if (empty($article['slug'])) {
		$slug = slugify($article['headline']);
		DB::update('articles', ['slug' => $slug], 'id = %i', $article['id']);
	}

	else
		$slug = $article['slug'];

	$klein->respond('GET', '/['.$slug.':article]', function($request, $response, $service) {
		$article = DB::queryFirstRow('SELECT * FROM articles WHERE slug = %s', $request->article);

		$service->title = $article['headline'];
		$service->desc = $article['desc'];
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
