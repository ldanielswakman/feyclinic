<section class="slide" id="<?php echo $section->slug() ?>" style="background-image: url('<?php foreach($section->images() as $image): echo $image->url(); endforeach; ?>');">

	<div class="spacer">
		<?php
		// show logo only on first section
		if ($section->slug() == $page->children()->listed()->first()->slug()): 
		?>

		<div class="row u-pv80 u-aligncenter">
			<div class="col-xs-12">
				<img src="<?php echo url('assets/images/logo.svg') ?>" class="hero-logo u-ml20 u-mr20" width="300" alt="<?php echo $site->title()->html() ?>" />
			</div>
		</div>

		<?php endif; ?>
	</div>

	<div class="block">
		<div class="row u-pv20 u-aligncenter">
			<div class="col-sm-8 col-sm-offset-2">
				<h3 class="u-mb40"><?php echo $section->text() ?></h3>
				<a href="#<?php echo $section->next()->slug(); ?>" class="btn btn-tertiary btn-lg ion-chevron-down ion-after">scroll</a>
				<?php foreach ($section->link()->yaml() as $link) : ?>
				<a href="<?php echo $link['link_page']; ?>" class="btn btn-primary btn-lg ion-chevron-right ion-after u-ml10"> <?php echo $link['link_text']; ?></a>
			<?php endforeach; ?>
			</div>
		</div>
	</div>

</section>