<?php
global $wp_query;
get_header();
?>

<section class="hero">
  <?php
  $args = ['post_type' => 'page', 'page_id' => 64, 'posts_per_page' => 1];
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
    _e('Sorry, no posts matched your criteria.', 'esimerkki');
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
          // haetaan alikategoriat
          $array = [
            'orderby' => 'name',
            'order' => 'DESC',
            'child_of' => get_queried_object_id(),
            'hide_empty' => true,

          ];
          $subcategories = get_categories($array);
          echo "<div class='menu-nav-container'>";
          foreach ( $subcategories as $subcategory ):
          echo " <div class='menu-nav-main'>
                  <ul class='menu-nav-items'>
                      <li class='menu-nav-item'>
                          <a href='salaatti'>
                              <span>$subcategory->name</span>
                          </a>
                      </li>
                  </ul>
              </div>";
          endforeach;
          echo "</div>";


          // loop through sub categories and display them
          foreach ( $subcategories as $subcategory ):

            echo '<h2>' . $subcategory->name . '</h2>';

            $args = [
              'post_type'      => 'post',
              'cat'            => $subcategory->term_id,
            ];

            $meals = new WP_Query( $args );

            generate_article( $meals );
            ?>
            <?php
            wp_reset_postdata();
          endforeach;
          ?>
          ?>
        </div>
    </section>
</main>


<?php get_footer(); ?>
