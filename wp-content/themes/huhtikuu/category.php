<?php
    global $wp_query;
    get_header();
    ?>

<section class="hero">
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
