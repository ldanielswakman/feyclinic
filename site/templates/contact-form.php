<?php
if ($pages->find('contactformulier')) :
?>
<div class="row u-mt20">
	<div class="col-sm-8 col-sm-offset-2">
		<!-- <form class="u-mt20">

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

		</form> -->

		<form method="post" action="<?php echo $page->url() ?>/#contact">

      <?php if($alert): ?>
      <div class="message alert u-pa20">
        <i class="ion ion-alert-circled ion-2x u-floatleft u-mr20 u-mb20"></i>
        <p><?php echo $pages->find('contactformulier')->message_alert() ?></p>
        <ul>
          <?php foreach($alert as $message): ?>
          <li><?php echo html($message) ?></li>
          <?php endforeach ?>
        </ul>
      </div>
      <?php endif ?>

      <?php if(param('status') == 'sent'): ?>

      <div class="message success u-pa20">
        <i class="ion ion-checkmark ion-2x u-floatleft u-mr20"></i>
        <p><?php echo $pages->find('contactformulier')->message_success() ?></p>
      </div>

      <?php else : ?>

      <div class="form-group">
        <label for="text">Hallo, ik wil graag meer weten over...</label>
        <textarea class="form-control" id="text" name="text" rows="5" value="" placeholder="Uw bericht of verzoek tot afspraak" required></textarea>
      </div>

      <div class="form-group">
        <label for="name">Mijn naam is ...</label>
        <input class="form-control" type="text" id="name" name="name" value="" placeholder="Uw naam">
      </div>

      <div class="form-group">
        <label for="email">U kunt mij bereiken via ...</label>
        <input class="form-control" type="email" id="email" name="email" value="" placeholder="Uw e-mailadres" required>
      </div>

      <div class="form-group u-aligncenter">
      	<input class="btn btn-primary btn-lg" type="submit" name="submit" value="Verzenden">
    	</div>

      <?php endif ?>

    </form>

	</div>
</div>
<?php endif; ?>