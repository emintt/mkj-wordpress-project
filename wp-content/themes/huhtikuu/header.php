<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" >
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>
<body <?php body_class();?> >
<div>
    <header class="page-header">
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-white text-dark" role="navigation">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand" href=" <?php echo home_url(); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/finland-coca-cola-logo_black_600x96.png' ?>" alt="Logo" width="150px">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                      <?php wp_nav_menu( array(
                        'theme_location'  => 'main-menu',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'myNav',
                        'menu_class'      => 'navbar-nav mr-auto', // class of ul el
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                      )
                      );
                      ?>

            </nav>

<!--             --><?php //wp_nav_menu( [ 'container' => 'nav', 'theme_location' => 'main-menu', 'depth' => 2 ] ) ?>
        </div>
    </header>