<?php

// function to set up stylesheet
function huhtikuu_style_setup(): void {
  wp_enqueue_style('huhtikuu-style', get_stylesheet_uri());
}

// add function to action, assigning to hook
add_action(hook_name: 'wp_enqueue_scripts', callback: 'huhtikuu_style_setup');