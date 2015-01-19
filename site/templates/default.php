<?php snippet('header') ?>

  <main>

  	<div class="row u-pv60">
	    <div class="col-sm-10 col-sm-offset-1">
	      <h1><?php echo $page->title()->html() ?></h1>
	      <i class="ion ion-2x ion-<?php echo $page->icon() ?>"></i>
	      <?php echo $page->text()->kirbytext() ?>
	    </div>
		</div>

  </main>

<?php snippet('footer') ?>