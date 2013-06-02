<div class="span12">
	<h3>List of products coming below</h3>
	<ul>
		<?php foreach ($products as $product): ?>
		<li><?php echo $product->ProductName; ?></li>
		<?php endforeach; ?>
	</ul>
</div>
<?php echo 'Elapsed time: ' . $this->benchmark->elapsed_time();?>
<br>
<?php echo 'Memory Usage: ' . $this->benchmark->memory_usage();?>