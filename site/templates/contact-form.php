<?php
if ($pages->find('contactformulier')) :
?>
<div class="row u-mt20">
	<div class="col-sm-8 col-sm-offset-2">
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
<?php endif; ?>