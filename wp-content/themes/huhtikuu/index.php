<?php
get_header();
?>

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

<main>

    <section class="products container">
      <?php
      $args = ['category_name' => 'home-page-posts', 'posts_per_page' => 4];
      $posts = new WP_Query($args);
      if ($posts->have_posts()) :
        while ($posts->have_posts()) : $posts->the_post();
          ?>
            <h2> <?php the_title(); ?></h2>
            <article class="single">
              <?php
              the_post_thumbnail('category-thumb');
              ?>
                <div class="product-text">
                    <h2> <?php the_title(); ?></h2>
                    <div> <?php the_content(); ?> </div>
                </div>
            </article>

        <?php
        endwhile;
        wp_reset_postdata();
      else :
        _e('Sorry, no posts matched your criteria.', 'esimerkki');
      endif; ?>

    </section>


</main>


<?php get_footer(); ?>
