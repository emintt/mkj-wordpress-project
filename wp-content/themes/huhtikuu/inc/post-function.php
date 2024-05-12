<?php

function generate_post($page_posts): void {

  //  print_r($products);
  // tulosta haun tulokset, esim haku productsin sisällön
  if ($page_posts->have_posts()) :
    while ($page_posts->have_posts()) : $page_posts->the_post();
      ?>
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
  endif;

}