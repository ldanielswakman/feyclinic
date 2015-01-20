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