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
            <img src="//placehold.it/200x100?text=Logo" alt="Logo">
        </div>
        <div class="header-top-right">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About us</a></li>
                </ul>
            </nav>
        </div>