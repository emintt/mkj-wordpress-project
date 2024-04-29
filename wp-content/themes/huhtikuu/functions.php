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
  //wp_enqueue_script('bootstrap-jquery', "https://code.jquery.com/jquery-3.3.1.slim.min.js", [], '1.0', true);
 // wp_enqueue_script('bootstrap-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js", [], '1.0', true);
  wp_enqueue_script('bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js", ['jquery'], '4.3.1', true);
}
add_action('wp_enqueue_scripts', 'huhtikuu_script_setup');

// add nav menus
register_nav_menu( 'main-menu', __( 'Main Menu' ) );
