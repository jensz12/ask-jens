<div class="text-center">
	<img src="/data/img/askjens.png" class="img-fluid center-block" alt="Ask Jens" width="400px">
</div>
	<div class="list-group">
		<?php foreach ($this->interviews as $interview): ?>
			<a href="" class="list-group-item list-group-item-action">
				<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1"><?php echo $interview['title']; ?></h5>
					<small class="text-muted"><?php echo $interview['content']; ?></small>
				</div>
				<p class="mb-1"></p>
				<small></small>
			</a>
		<?php endforeach; ?>
	</div>
