<?php snippet('header') ?>

  <main id="top">

    <?php
    
    foreach($page->children()->listed() as $section):

		// slides section(s)
    if ($section->template() == 'home-section'): 
      
      snippet('../templates/home-section', ['section' => $section]);
      
  	// contact section
  	elseif ($section->template() == 'contact-form'): 
		?>
  	<section class="u-pv80" id="<?= $section->template() ?>">

				<div class="row u-mb20">
					<div class="col-sm-10 col-sm-offset-1 u-aligncenter">
            <?php if(param('status') != 'sent'): ?>
					  <h3 class="u-mt10"><?= $section->text() ?></h3>
            <?php endif; ?>
					</div>
				</div>

				<?php snippet('../templates/contact-form'); ?>

  	</section>

  	<?php endif; ?>

  <?php endforeach; ?>

  <section>

    <div class="row row-full row-nopadding">
      <div class="col-sm-6" style="border-bottom: 1px solid #aeb3bc;">
        <a href="<?= $site->find('filosofie')->url() ?>" class="next">
          <div class="row u-pv60 u-aligncenter">
            <div class="col-sm-8 col-sm-offset-2">
              lees meer over de
              <h3><?= $site->find('filosofie')->title() ?></h3>
            </div>
          </div>
        </a>

      </div>
      <div class="col-sm-6" style="border-left: 1px solid #aeb3bc; border-bottom: 1px solid #aeb3bc;">

        <a href="<?= $site->pages()->template('news')->first()->url() ?>" class="next">
          <div class="row u-pv60 u-aligncenter">
            <div class="col-sm-8 col-sm-offset-2">
              <?= 'of bekijk het laatste'; ?>
              <h3><?= $site->pages()->template('news')->first()->title() ?></h3>
            </div>
          </div>
        </a>

      </div>
    </div>

  </section>

  </main>

<?php snippet('footer') ?>