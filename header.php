<!DOCTYPE html>
<html lang="zh-CN"> 
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <base target="_blank" />
    <title>
      <?php if (is_home () ) {
          bloginfo('name'); echo ' - ' ; bloginfo('description'); ;
      } elseif ( is_category() ) {
          single_cat_title(); echo ' - ' ; bloginfo('name');
      } elseif (is_single() ) {
          single_post_title(); echo ' - '; bloginfo('name');
      } elseif (is_page() ) {
          single_post_title(); echo ' - '; bloginfo('name');
      } else {
          wp_title('',true); echo ' - '; bloginfo('name');
      } ?>
    </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <!--[if IE 7]>
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome-ie7.min.css">
    <![endif]-->
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_url'); ?>/js/html5shiv.min.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>