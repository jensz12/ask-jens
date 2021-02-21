<div class="text-center">
	<img src="/data/img/askjens.png" class="img-fluid center-block" alt="Ask Jens" width="400px">
</div>
<input class="form-control" type="text" placeholder="The Midnight interviews" readonly>
	<div class="list-group">
		<?php foreach ($this->articles as $article): ?>
			<a href="<?php echo $article['url']; ?>" class="list-group-item list-group-item-action">
				<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1"><?php echo $article['headline']; ?></h5>
					<small class="text-muted"><?php echo $article['date']; ?></small>
				</div>
				<p class="mb-1"><?php echo $article['desc']; ?></p>
				<small><?php echo $article['author']; ?></small>
			</a>
		<?php endforeach; ?>
	</div>
