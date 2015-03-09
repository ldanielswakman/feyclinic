<!DOCTYPE html>

  <html lang="en">

  <head>

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

    <?php
      // checks if not on localhost, then serves assets from CDN
      $local = strpos($_SERVER['SERVER_NAME'], 'localhost');
      if($local === false) :
        // Bootstrap
        echo css('http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
        // Google Webfonts
        echo css('http://fonts.googleapis.com/css?family=Quando');
        echo css('http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700italic,700,300,300italic');
        // Ionicons
        echo css('http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
        // JQuery, SmoothScroll & Fastclick
        echo js('http://code.jquery.com/jquery-1.11.1.min.js');
        echo js('http://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.5.4/jquery.smooth-scroll.min.js');
        echo js('http://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.2/fastclick.min.js');
      // if localhost then load local assets
      else :
        echo css('assets/css/bootstrap.min.css');
        echo css('assets/css/ionicons.min.css');
        echo js('assets/js/jquery-1.11.1.min.js');
        echo js('assets/js/jquery.smooth-scroll.min.js');
        echo js('assets/js/fastclick.min.js');
      endif;
    ?>

    <?php echo css('assets/css/style.css') ?>
    <?php echo js('assets/js/scripts.js', $async = true) ?>

    <script>
      $(document).ready(function() {
      // adds isLoaded body class for pageload animations
        setTimeout(function() {
          $('body').addClass('isLoaded');
        }, 1000);
      });
    </script>

    <link href="favicon.ico" type="image/x-icon" rel="icon" />
    <link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />

  </head>
  <body class="<?php echo $page->template() ?>">

    <?php snippet('menu') ?>