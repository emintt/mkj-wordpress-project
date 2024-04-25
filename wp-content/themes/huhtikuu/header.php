<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" >
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class();?> >
<div class="container">
    <header class="page-header">
        <div class="header-top-left">
            <img src="<?php echo get_stylesheet_directory_uri() . '/images/finland-coca-cola-logo_black_600x96.webp' ?>" alt="Logo">
        </div>
        <div class="header-top-right">
            <nav>
                <ul>
                    <li><a href="#">Brändit</a></li>
                    <li><a href="#">Tutustuu</a></li>
                    <li><a href="#">Vastuullisuus us</a></li>
                </ul>
            </nav>
        </div>