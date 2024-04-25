<?php

// function to set up stylesheet
function huhtikuu_style_setup(): void {
  wp_enqueue_style('huhtikuu-style', get_stylesheet_uri());
  wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap");
  wp_enqueue_style('bootstrap-css', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css");
}

// add function to action, assigning to hook
add_action(hook_name: 'wp_enqueue_scripts', callback: 'huhtikuu_style_setup');

function huhtikuu_script_setup(): void {
  wp_enqueue_script('bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js", [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'huhtikuu_script_setup');


// add nav menus
register_nav_menu( 'main-menu', __( 'Main Menu' ) );
