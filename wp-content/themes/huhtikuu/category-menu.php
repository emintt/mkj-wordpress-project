<?php
global $wp_query;
get_header();
?>

<section class="hero">
  <?php
  $args = ['post_type' => 'page', 'page_id' => 64 , 'posts_per_page' => 1];
  $posts = new WP_Query($args);
  if ($posts->have_posts()) :
    while ($posts->have_posts()) : $posts->the_post();
      ?>
            <div class=" hero-text">
                <div class="hero-paragraph">
                  <?php the_content(); ?>
                </div>
            </div>

    <?php
    endwhile;
    else:
      _e( 'Sorry, no posts matched your criteria.', 'esimerkki' );
  endif;
  wp_reset_postdata();

  ?>

  <?php the_custom_header_markup(); ?>
</section>

<main>
  <section class=" container products-section">
    <?php
    echo '<h1 class="products-heading">' . single_cat_title('', false) . '</h1>'; ?>
    <div class=" products">
      <?php
      generate_article($wp_query); ?>
    </div>
  </section>
</main>


<?php get_footer(); ?>
