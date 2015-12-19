<?php snippet('header') ?>

  <main>

		<?php 
		// get background image of first slide of homepage
		$intro_bg = '';
		foreach($pages->find('home')->children()->visible()->first()->images() as $image): 
			$intro_bg = $image->url(); 
		endforeach; 
		?>

  	<header class="slide slide-modest" id="intro" style="background-image: url('<?php echo $intro_bg ?>');">

  		<div class="block block-to-themelightest">

		  	<div class="row u-pv40 u-sm-aligncenter">
		  		<div class="col-sm-1 col-sm-offset-1">
		  			<i class="ion ion-5x ion-<?php echo $page->icon() ?>"></i>
		  		</div>
			    <div class="col-sm-6">
			      <h1 class="u-mv20"><?php echo $page->title()->html() ?></h1>
			    </div>
				</div>

			</div>

		</header>

		<section id="updates" class="u-pv40">

			<?php foreach(yaml($page->items()) as $item): ?>
			<div class="row u-pv30 update">
				<div class="col-sm-1 col-sm-offset-2 u-aligncenter">
					<i class="ion ion-ios-paper-outline ion-3x u-mb20"></i>
				</div>
				<div class="col-sm-7 col-md-8">
					<h4><?php echo $item['title'] ?></h4>
					<small class="u-block u-mb10">
						<?php 
						setlocale(LC_TIME, "nl_NL");
						echo strftime('%e %B %Y', strtotime($item['date'])) 
						?>
					</small>
					<?php echo kirbytext($item['message']) ?>
				</div>
				<div class="col-sm-3">
				</div>
			</div>
			<?php endforeach; ?>

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
