<?php
if ($pages->find('contactformulier')) :
?>
<div class="row u-mt20">
	<div class="col-sm-8 col-sm-offset-2">
  
		<form method="post" action="<?= $page->url() ?>/#contact-form">

      <?php if($form->success()): ?>

      <div class="message success u-pa20">
        <i class="ion ion-checkmark ion-2x u-floatleft u-mr20"></i>
        <p><?= $pages->find('contactformulier')->message_success() ?></p>
      </div>

      <?php else : ?>

      <?php snippet('uniform/errors', ['form' => $form]); ?>
        
      <div class="form-group">
        <label for="text">Hallo, ik wil graag meer weten over...</label>
        <textarea class="form-control" id="text" name="text" rows="5" value="<?= $form->old('text') ?>" placeholder="Uw bericht of verzoek tot afspraak" required></textarea>
      </div>

      <div class="form-group">
        <label for="name">Mijn naam is ...</label>
        <input class="form-control" type="text" id="name" name="name" value="<?= $form->old('name') ?>" placeholder="Uw naam">
      </div>

      <div class="form-group">
        <label for="email">U kunt mij bereiken via ...</label>
        <input class="form-control" type="email" id="email" name="email" value="<?= $form->old('email') ?>" placeholder="Uw e-mailadres" required>
      </div>

      <?= csrf_field(); ?>
      <?= honeypot_field(); ?>

      <div class="form-group u-aligncenter">
      	<input class="btn btn-primary btn-lg" type="submit" name="submit" value="Verzenden">
    	</div>

      <?php endif ?>

    </form>

	</div>
</div>
<?php endif; ?>