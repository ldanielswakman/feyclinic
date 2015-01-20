<?php snippet('header') ?>

  <main>

		<?php 
		// get background image of first slide of homepage
		$intro_bg = '';
		foreach($pages->find('home')->children()->visible()->first()->images() as $image): 
			$intro_bg = $image->url(); 
		endforeach; 
		?>

  	<section class="slide" id="intro" style="background-image: url('<?php echo $intro_bg ?>');">

	  	<div class="row u-pv80">
	  		<div class="col-sm-1 col-sm-offset-1">
	  			<i class="ion ion-5x ion-<?php echo $page->icon() ?>"></i>
	  		</div>
		    <div class="col-sm-6">
		      <h1 class="u-mv20"><?php echo $page->title()->html() ?></h1>
		    </div>
			</div>

  	</section>

  	<section>

	  	<div class="row u-pv60">
		    <div class="col-sm-8 col-sm-offset-2">
		      <?php echo $page->text()->kirbytext() ?>
		    </div>
			</div>

		</section>

  </main>

<?php snippet('footer') ?>