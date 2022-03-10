<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $this->title; ?></title>
	<link rel="icon" href="data/img/askjensfav.png">
	<meta name="description" content="Ask Jens">
	<meta name="theme-color" content="#F81472">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@jensz12">
	<meta name="twitter:creator" content="@jensz12">
	<meta name="twitter:title" content="<?php echo $this->title; ?>">
	<meta name="twitter:description" content="<?php echo $this->desc; ?>">
	<meta name="twitter:image:src" content="/data/img/askjens.jpg">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">	<link rel="image_src" href="/data/img/askjens.jpg">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
	<script src="https://kit.fontawesome.com/5de3f22030.js" crossorigin="anonymous"></script>
	<link rel="manifest" href="/manifest.json">
<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://matomo.jensz12.com/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '2']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

	<style>
	<?php require 'css/style.css'; ?>
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<?php $this->yieldView(); ?>
				<div class="card">
					<div class="card-body">
						<p class="card-text">&copy; <?php echo date("Y"); ?> <a href="https://themidnight.wiki">The Midnight Wiki</a>. <a href="https://themidnight.wiki/policy/cookies">Cookie policy</a>. <a href="https://themidnight.wiki/policy/privacy">Privacy policy</a>. <small class="roboto"> Made with <i class="fal fa-heart"></i> in <a href="https://jensz12.com">Aalborg</a> & <a href="https://spirit55555.dk">Copenhagen.</a></small></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
