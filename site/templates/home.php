<?php snippet('header') ?>

  <main>

	  <?php foreach($page->children()->visible() as $section): ?>

		<?php 
		// slides section(s)
		if ($section->template() == 'home-section'): 
		?>
    <section class="slide" id="<?php echo $section->slug() ?>" style="background-image: url('<?php foreach($section->images() as $image): echo $image->url(); endforeach; ?>');">

				<div class="spacer">
					<?php
					// show logo only on first section
					if ($section->slug() == $page->children()->visible()->first()->slug()): 
					?>

						<div class="row u-pv80 u-aligncenter">
							<div class="col-sm-5 col-sm-offset-1">
								<img src="<?php echo url('assets/images/logo.svg') ?>" width="300" alt="<?php echo $site->title()->html() ?>" />
							</div>
						</div>

					<?php endif; ?>
				</div>

				<div class="block">
					<div class="row u-pv40 u-aligncenter">
						<div class="col-sm-7 col-sm-offset-4">
							<h3 class="u-mb40"><?php echo $section->text() ?></h3>
							<a href="#<?php echo $section->next()->slug(); ?>" class="btn btn-tertiary btn-lg ion-chevron-down ion-after">scroll</a>
						</div>
					</div>
				</div>

    </section>


  	<?php 
  	// contact section
  	elseif ($section->slug() == 'contact'): 
		?>
  	<section class="slide u-pv80" id="<?php echo $section->slug() ?>">

				<div class="row u-pv20 u-mt40">
					<div class="col-sm-10 col-sm-offset-1 u-aligncenter">
						<h3><?php echo $section->text() ?></h3>
					</div>
				</div>

				<div class="row u-mt20">
					<div class="col-sm-6 col-sm-offset-3">
						<form class="u-mt20">

							<?php foreach(yaml($pages->find('contactformulier')->items()) as $field): ?>
							<div class="form-group">
								<label for="question"><?php echo $field['label'] ?></label><br />
								<?php if($field['type'] == "textarea"): ?>
									<textarea class="form-control" rows="5" id="question" placeholder="<?php echo $field['placeholder'] ?>"></textarea>
								<?php else: ?>
									<input type="<?php echo $field['type'] ?>" class="form-control" id="email" placeholder="<?php echo $field['placeholder'] ?>">
								<?php endif; ?>
							</div>
							<?php endforeach; ?>

							<div class="form-group u-aligncenter">
								<button type="submit" class="btn btn-primary btn-lg">Verzenden</button>
							</div>

						</form>
					</div>
				</div>

  	</section>


  	<?php 
  	// news section
  	elseif ($section->template() == 'news'):
  	include('news.php');
		?>


  	<?php endif; ?>

  <?php endforeach; ?>

    <hr>

  </main>

<?php snippet('footer') ?>