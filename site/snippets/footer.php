  <footer>

  	<div class="row u-pv60">
  		<div class="col-sm-4 col-sm-offset-1">
  			<?php echo $site->footerleft()->kirbytext() ?>
  		</div>
  		<div class="col-sm-2">
  			<img src="<?php echo url('assets/images/logo_white.svg') ?>" width="200" title="<?php echo $site->title()->html() ?>" alt="<?php echo $site->title()->html() ?>" />
  		</div>
  		<div class="col-sm-4 u-alignright">
  			<?php echo $site->footerright()->kirbytext() ?>
  		</div>
  	</div>

  	<section class="colophon">
	  	<div class="row u-pv40">
	  		<div class="col-xs-12 u-aligncenter">
	  			<?php echo $site->colophon()->kirbytext() ?>
	  		</div>
	  	</div>
	  </section>

  </footer>

</body>
</html>