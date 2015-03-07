<?php snippet('header') ?>

  <main id="top">

	  <?php foreach($page->children()->visible() as $section): ?>

		<?php 
		// slides section(s)
		if ($section->template() == 'home-section'): 
		include('home-section.php');
		?>

  	<?php 
  	// contact section
  	elseif ($section->slug() == 'contact'): 
		?>
  	<section class="slide u-pv80" id="<?php echo $section->slug() ?>">

				<div class="row u-mb20">
					<div class="col-sm-10 col-sm-offset-1 u-aligncenter">
            <?php if(param('status') != 'sent'): ?>
					  <h3 class="u-mt10"><?php echo $section->text() ?></h3>
            <?php endif; ?>
					</div>
				</div>

				<?php include('contact-form.php'); ?>

  	</section>


  	<?php 
  	// news section
  	elseif ($section->template() == 'news'):
  	include('news.php');
		?>

  	<?php endif; ?>

  <?php endforeach; ?>

  </main>

<?php snippet('footer') ?>