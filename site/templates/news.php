<aside id="updates" class="u-pv40">

	<?php foreach(yaml($section->items()) as $item): ?>
	<div class="row u-pv20 update">
		<div class="col-sm-1 col-md-offset-2 col-sm-offset-1">
			<i class="ion ion-chatbubble ion-2x"></i>
		</div>
		<div class="col-sm-7 col-md-6">
			<h4><?php echo $item['title'] ?></h4>
			<small><?php echo date('d-m-Y', strtotime($item['date'])) ?></small>
			<p><?php echo $item['message'] ?></p>
		</div>
		<div class="col-sm-3">
		</div>
	</div>
	<?php endforeach; ?>

</aside>	