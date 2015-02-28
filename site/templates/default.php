<?php snippet('header') ?>

  <main>

		<?php 
		// get background image of first slide of homepage
		$intro_bg = '';
		foreach($pages->find('home')->children()->visible()->first()->images() as $image): 
			$intro_bg = $image->url(); 
		endforeach; 
		?>

  	<header class="slide" id="intro" style="background-image: url('<?php echo $intro_bg ?>');">

	  	<div class="row u-pv80 u-sm-aligncenter">
	  		<div class="col-sm-1 col-sm-offset-1">
	  			<i class="ion ion-5x ion-<?php echo $page->icon() ?>"></i>
	  		</div>
		    <div class="col-sm-6">
		      <h1 class="u-mv20"><?php echo $page->title()->html() ?></h1>
		    </div>
			</div>

  	</header>

  	<section class="block content">

	  	<div class="row u-pv60">
		    <div class="col-sm-8 col-sm-offset-2">
		      <?php echo $page->text()->kirbytext() ?>
		    </div>
			</div>

		</section>

		<section class="block u-pv40" id="contact">

			<?php include('contact-form.php'); ?>

		</section>

		<?php
		if ($page->nextVisible()) :
		// do not link to menu separator
		$nextpage = ($page->nextVisible()->slug() != 'separator') ? $page->nextVisible() : $page->nextVisible()->nextVisible(); 
		?>

  	<a href="<?php echo $nextpage->url() ?>" class="next">

	  	<div class="row u-pv80 u-aligncenter">
		    <div class="col-sm-8 col-sm-offset-2">
		    	<?php echo 'volgende:'; ?>
		      <h3><?php echo $nextpage->title() ?></h3>
		    </div>
			</div>

		</a>

		<?php endif; ?>

  </main>

<?php snippet('footer') ?>