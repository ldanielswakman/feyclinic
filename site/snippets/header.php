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
      echo css('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
      // Google Webfonts
      echo css('//fonts.googleapis.com/css?family=Raleway:300,700,400,100');
      echo css('//fonts.googleapis.com/css?family=Merriweather:400,400italic,700italic,700,300,300italic');
      // Ionicons
      echo css('//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css');
      // JQuery & Fastclick
      echo js('//code.jquery.com/jquery-1.11.1.min.js');
      echo js('//cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.2/fastclick.min.js');
    // if localhost then load local assets
    else :
      echo css('assets/css/bootstrap.min.css');
      echo css('assets/css/ionicons.min.css');
      echo js('assets/js/jquery-1.11.1.min.js');
      echo js('assets/js/fastclick.min.js');
      echo js('assets/js/jquery.smooth-scroll.min.js');
    endif;
  ?>

  <?php echo css('assets/css/style.css') ?>
  <?php echo js('assets/js/scripts.js') ?>


</head>
<body class="<?php echo $page->slug() ?>">

  <header>
    <?php snippet('menu') ?>
  </header>