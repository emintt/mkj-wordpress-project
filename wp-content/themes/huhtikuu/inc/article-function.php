<?php

function generate_article($products): void {

  //  print_r($products);
  // tulosta haun tulokset, esim haku productsin sisällön
          if ($products->have_posts()) :
            while ($products->have_posts()) : $products->the_post();
              ?>
                <article class="product">
                  <?php
                  // thumbnail la parameter co san
                  the_post_thumbnail('category-thumb');
                  ?>
                    <div class="product-text">
                        <h2> <?php the_title(); ?></h2>

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
            wp_reset_postdata();
          else :
            _e('Sorry, no posts matched your criteria.', 'esimerkki');
          endif;

}