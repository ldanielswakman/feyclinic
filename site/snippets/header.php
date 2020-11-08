<!DOCTYPE html>

  <html lang="en">

  <head>

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="<?php echo $site->description()->html() ?>">

    <?php
      // checks if not on localhost, then serves assets from CDN
      $local = strpos($_SERVER['SERVER_NAME'], 'localhost');
      $local = false;
      if($local === false) :
        // Bootstrap
        echo css('http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
        // Google Webfonts
        echo css('https://fonts.googleapis.com/css2?family=Quando&display=swap');
        echo css('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
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

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-9833982-24', 'auto');
      ga('send', 'pageview');
    </script>

  </head>
  <body class="<?php echo $page->template() ?>">

    <?php snippet('menu') ?>