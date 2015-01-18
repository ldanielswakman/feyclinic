<?php snippet('header') ?>

  <main>

  	<div class="row">
	    <div class="col-sm-10 col-sm-offset-1">
	      <h1><?php echo $page->title()->html() ?></h1>
	      <?php echo $page->text()->kirbytext() ?>
	    </div>
		</div>

  </main>

<?php snippet('footer') ?>