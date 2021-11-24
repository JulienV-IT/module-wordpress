<html <?php language_attributes();?>>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="<?php bloginfo('charset');?>"/>
    <link href="style.css" type="text/css">
    <?php wp_head();?>
  </head>
  <body  id="body-main"  <?php body_class('bg-gray-theme');?>>
  <?php wp_body_open(); ?>
  <?php the_embed_site_title();?>
  <?php wp_nav_menu(array(
    'theme_location' => 'footer',
    'menu_class' => "navigation-main navigation-footer flex flex-row text-white items-center justify-center font-sans text-base mt-4",
    'menu_id' => 'footer-menu',
    ));?>
