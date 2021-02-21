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
	<meta name="twitter:description" content="Ask Jens">
	<meta name="twitter:image:src" content="/data/img/askjens.jpg">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="image_src" href="/data/img/askjens.jpg">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/5de3f22030.js" crossorigin="anonymous"></script>
	<link rel="manifest" href="/manifest.json">
	<style>
		body {
			background-color: #C0C0C0;
			font-family: 'Press Start 2P', cursive;
			padding-top: 35px;
			padding-bottom: 35px;
		}

		.fa-heart {
			color: #A81010;
		}

		.form-control {
			margin-top: 30px;
			margin-bottom: 30px;
		}

		.img {
			margin-bottom: 100px;
		}

		.list-group {
			margin-bottom: 100px;
		}

		h1 {
			font-size: 2.5rem;
			color: #F81472;
			text-transform: uppercase;
		}
		h5 {
			font-size: 0.83rem;
			clear: left;
			color: #F81472;
			text-transform: uppercase;
		}

		h1.page-header {
			margin-top: 1rem;
		}
</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<?php $this->yieldView(); ?>
				<div class="card">
					<div class="card-body">
						<p class="card-text">&copy; <?php echo date("Y"); ?> <a href="https://themidnight.wiki">The Midnight Wiki</a>. Made with <i class="fal fa-heart"></i> in Aalborg & Copenhagen</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
