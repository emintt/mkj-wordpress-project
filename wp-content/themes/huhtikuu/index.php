<?php get_header(); ?>

<section class="hero">
    <div class="hero-text">
        <h1>Welcome to our website</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri() . '/images/width1960-1.png' ?>" alt="Hero">
</section>

<main>
    <section>
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          ?>
            <article>
                <h2><?php the_title(); ?></h2>
<!--                <div class="meta-info">-->
<!--                    <p>Posted in --><?php //echo get_the_date(); ?><!-- by --><?php //the_author_posts_link(); ?><!--</p>-->
<!--                    <p>Categories: --><?php //the_category(' '); ?><!--</p>-->
<!--                    <p>Tags: --><?php //the_tags('', ', '); ?><!--</p>-->
<!--                </div>-->
              <?php the_content(); ?>
            </article>
        <?php
        endwhile;
      else :
        _e('Sorry, no posts matched your criteria.', 'huhtikuu');
      endif;
      ?>
    </section>
    <section class="products">
        <h2 class="text-primary">Featured Products</h2>
        <article class="product">
            <img src="//placehold.it/200x200?text=Product" alt="Product">
            <h3>Product 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
            <a href="#">Read More</a>
        </article>
        <article class="product">
            <img src="//placehold.it/200x200?text=Product" alt="Product">
            <h3>Product 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
            <a href="#">Read More</a>
        </article>
        <article class="product">
            <img src="//placehold.it/200x200?text=Product" alt="Product">
            <h3>Product 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
            <a href="#">Read More</a>
        </article>
    </section>
</main>


<?php get_footer(); ?>
