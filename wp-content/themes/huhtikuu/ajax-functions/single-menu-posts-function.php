<?php
function menu_posts(): void {
  $term_id = $_POST['term_id'];
  echo 'term id la ' . $term_id;
  $posts = get_posts(['category' => 7]);
  echo json_encode($posts);
  wp_die();
}

add_action('wp_ajax_single_menu_posts', 'menu_posts');
?>