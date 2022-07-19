<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>

  <?php 
    $title = get_the_title();
    if($title == ''){
      $title = 'Product Runt';
    }
  ?>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?php echo get_theme_root_uri();?>/Product Runt/assets/img/productRunt-favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_theme_root_uri();?>/Product Runt/style.css">
  <link rel="stylesheet" href="<?php echo get_theme_root_uri();?>/Product Runt/assets/css/index.css">
  <link rel="stylesheet" href="<?php echo get_theme_root_uri();?>/Product Runt/assets/css/contato.css">
  <link rel="stylesheet" href="<?php echo get_theme_root_uri();?>/Product Runt/assets/css/sobre.css">
  <link rel="stylesheet" href="<?php echo get_theme_root_uri();?>/Product Runt/assets/css/responsivo.css">
  <script src="https://kit.fontawesome.com/a055e3e8af.js" crossorigin="anonymous"></script>
  <title><?php echo $title; ?></title>
</head>
<body>
  <section class="topo">
    <div class="center">
      <header>
        <div class="logo">
          <a href="<?php echo '/wordpress' ?>"><img src="<?php echo get_theme_root_uri();?>/Product Runt/assets/img/home/logo.png" alt="Product Runt Logo"></a>
        </div> <!-- logo -->
      </header>
      <ul class="menu-desktop">
        <li><a href="/wordpress/">Home</a></li>
        <li><a href="/wordpress/sobre">Sobre</a></li>
        <li><a href="/wordpress/contato">Contato</a></li>
      </ul> <!-- menu-desktop -->
      <div class="menu-mobile">
        <i class="fa-solid fa-bars"></i>
        <ul>
          <li><a href="/wordpress/">Home</a></li>
          <li><a href="/wordpress/sobre">Sobre</a></li>
          <li><a href="/wordpress/contato">Contato</a></li>
        </ul>
      </div><!-- menu-mobile -->