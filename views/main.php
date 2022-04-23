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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
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
						<p class="card-text">&copy; <?php echo date("Y"); ?> <a href="https://themidnight.wiki">The Midnight Wiki</a>.  <a href="https://themidnight.wiki/wiki/wiki:Privacy_policy">Privacy policy</a>. <small class="roboto"> Made with <i class="fal fa-heart"></i> in <a href="https://jensz12.com">Aalborg</a> & <a href="https://spirit55555.dk">Copenhagen.</a></small></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script></body>
</html>
