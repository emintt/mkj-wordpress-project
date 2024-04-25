<?php

// function to set up stylesheet
function huhtikuu_style_setup(): void {
  wp_enqueue_style('huhtikuu-style', get_stylesheet_uri());
  wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap");
}

// add function to action, assigning to hook
add_action(hook_name: 'wp_enqueue_scripts', callback: 'huhtikuu_style_setup');
