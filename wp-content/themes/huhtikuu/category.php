<?php get_header(); ?>

<section class="hero">
  <?php the_custom_header_markup(); ?>
</section>

<main>
    <section class=" container products-section">
      <?php
      echo '<h1 class="products-heading">' . single_cat_title('', false) . '</h1>'; ?>
        <div class="products">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
              ?>
                <article class="product">
                  <?php
                  // thumbnail la parameter co san
                  the_post_thumbnail('thumbnail');
                  ?>
                    <div class="product-text">
                        <h3> <?php the_title(); ?></h3>

                      <?php
                      $excerpt = get_the_excerpt();
                      ?>
                        <p>
                          <?php
                          echo substr($excerpt, 0, 100);
                          ?> ...
                        </p>
                        <a href="<?php the_permalink();?>" class="product-link">Lue lisää</a>
                    </div>
                </article>

            <?php
            endwhile;
          else :
            _e('Sorry, no posts matched your criteria.', 'esimerkki');
          endif;
          ?>
        </div>
    </section>
</main>


<?php get_footer(); ?>
