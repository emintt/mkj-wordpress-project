<?php
global $wp_query;
get_header(); ?>

<section class="hero">

  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      ?>
      <?php if (is_front_page()) : ?>
            <div class=" hero-text">
                <div class="hero-paragraph">
                  <?php the_content(); ?>
                </div>
            </div>
      <?php endif; ?>

    <?php
    endwhile;

  endif;
  ?>

  <?php the_custom_header_markup(); ?>
</section>

<main class="container">
    <section class="container">
      <div class="products">
        <?php  generate_post($wp_query); ?>

      </div>
    </section>




</main>


<?php get_footer(); ?>
