<?php

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// function to set up stylesheet
function huhtikuu_style_setup(): void {
  wp_enqueue_style('bootstrap-css', "https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css");
  wp_enqueue_style('huhtikuu-style', get_stylesheet_uri());
  wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap");
}

// add function to action, assigning to hook
add_action(hook_name: 'wp_enqueue_scripts', callback: 'huhtikuu_style_setup');

function huhtikuu_script_setup(): void {
  wp_enqueue_script('bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js", ['jquery'], '4.3.1', true);
}
add_action('wp_enqueue_scripts', 'huhtikuu_script_setup');

function theme_setup(): void {
  // näkee title tag
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo', [
    'height'      => 24,
    'width'       => 150,
    'flex-height' => true,
    'flex-width' => true,
  ] );


  add_theme_support( 'custom-header' );


  // Set the default Post Thumbnail size
  set_post_thumbnail_size( 400, 400, true ); // 400px wide by 400px high, hard crop mode
  // Add custom image sizes
  add_image_size( 'custom-header', 1200, 400, true ); // Custom header size
  add_image_size( 'category-thumb', 400, 400 , true);
}

add_action( 'after_setup_theme', 'theme_setup' );

// add nav menus
register_nav_menu( 'main-menu', __( 'Main Menu' ) );
register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );


// custom functions
require_once( __DIR__ . '/inc/article-function.php' );
require_once( __DIR__ . '/inc/post-function.php' );

function script_setup():void {
  wp_enqueue_script('menu_posts', get_template_directory_uri() . '/js/singleMenuPosts.js',
    [], '1.0', true);
  $script_data = [
    // ajaxin vakiona
    'ajax_url' => admin_url('admin-ajax.php'),

  ];
  // tunniste wp_enqueue_script('single_post'), sen dataksi; 'singlePost'
  wp_localize_script('menu_posts', 'menuPosts', $script_data);
};

add_action('wp_enqueue_scripts', 'script_setup');


