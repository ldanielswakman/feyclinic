<aside id="updates" class="u-pv40">

	<div class="row u-pv20">
		<div class="col-xs-12 u-aligncenter">
			<h4 class="title">nieuws</h4>
		</div>
	</div>

	<?php foreach(yaml($section->items()) as $item): ?>
	<div class="row u-pv20 update">
		<div class="col-sm-1 col-sm-offset-2">
			<i class="ion ion-ios-compose-outline ion-3x"></i>
		</div>
		<div class="col-sm-7 col-md-8">
			<h4><?php echo $item['title'] ?></h4>
			<p><?php echo kirbytext($item['message']) ?></p>
			<small>
				<?php 
				setlocale(LC_TIME, "nl_NL");
				echo strftime('%e %B %Y', strtotime($item['date'])) 
				?>
			</small>
		</div>
		<div class="col-sm-3">
		</div>
	</div>
	<?php endforeach; ?>

</aside>
