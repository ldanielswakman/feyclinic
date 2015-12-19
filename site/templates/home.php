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
  	<section class="u-pv80" id="<?php echo $section->slug() ?>">

				<div class="row u-mb20">
					<div class="col-sm-10 col-sm-offset-1 u-aligncenter">
            <?php if(param('status') != 'sent'): ?>
					  <h3 class="u-mt10"><?php echo $section->text() ?></h3>
            <?php endif; ?>
					</div>
				</div>

				<?php include('contact-form.php'); ?>

  	</section>

  	<?php endif; ?>

  <?php endforeach; ?>

  <section>

    <div class="row row-full row-nopadding">
      <div class="col-sm-6" style="border-bottom: 1px solid #aeb3bc;">
        <a href="<?php echo $site->find('filosofie')->url() ?>" class="next">
          <div class="row u-pv60 u-aligncenter">
            <div class="col-sm-8 col-sm-offset-2">
              lees meer over de
              <h3><?php echo $site->find('filosofie')->title() ?></h3>
            </div>
          </div>
        </a>

      </div>
      <div class="col-sm-6" style="border-left: 1px solid #aeb3bc; border-bottom: 1px solid #aeb3bc;">

        <a href="<?php echo $site->find('nieuws')->url() ?>" class="next">
          <div class="row u-pv60 u-aligncenter">
            <div class="col-sm-8 col-sm-offset-2">
              <?php echo 'of bekijk het laatste'; ?>
              <h3><?php echo $site->find('nieuws')->title() ?></h3>
            </div>
          </div>
        </a>

      </div>
    </div>

  </section>

  </main>

<?php snippet('footer') ?>