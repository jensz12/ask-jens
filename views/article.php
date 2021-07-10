<?php $parsedown = new Parsedown();; ?>
<div class="text-center">
	<a href="/"><img src="/data/img/askjens.png" class="img-fluid center-block" alt="Ask Jens" width="400px"></a>
</div>
	<div class="jumbotron">
	<h1 class="display-4"><?php echo $this->article['headline']; ?></h1>
	<p><?php echo $parsedown->text($this->article['content']); ?></p>
	</div>
