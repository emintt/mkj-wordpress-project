<?php get_header(); ?>

<section class="hero">
    <div class=" hero-text">
        <h1 class="hero-heading">Real magic summer</h1>
        <p class="hero-paragraph">Lorem ipsum dolor sit amet. </p>
        <button class="hero-btn">Lue lisää</button>
    </div>
    <?php the_custom_header_markup(); ?>
</section>

<main class="container">
    <section class="container">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <!--                <div class="meta-info">-->
                <!--                    <p>Posted in --><?php //echo get_the_date(); ?><!-- by -->
              <?php //the_author_posts_link(); ?><!--</p>-->
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
    <div class="container">
        <div class="row">
            <div class="col-sm">
                One of three columns
            </div>
            <div class="col-sm">
                One of three columns
            </div>
        </div>
    </div>
    <section class="products">
        <h2 class="">Suosittuja juuri nyt</h2>

        <article class="product">
            <img src="//placehold.it/774x650?text=Product" alt="Product">
            <div class="product-text">
                <h3>Product 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
                <a href="#" class="product-link">Read More</a>
            </div>

        </article>
        <article class="product ">
            <img src="//placehold.it/774x650?text=Product" alt="Product">
            <div class="product-text">
                <h3>Product 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
                <a href="#" class="product-link">Lue lisää</a>
            </div>
        </article>

    </section>
    <section class="medias">
        <h2>Maailmanlaajuiset vaikutukset</h2>
        <div class="media">
            <div class="media-content">
                <h3>Planeettamme, ihmiset ja yhteisöt ovat tärkeitäl</h3>
                <p class="media-paragraph">ore eligendi pariatur quia porro, dicta ipsa velit delectus doloremque ipsam
                    suscipit maxime nobis mollitia rem.</p>
                <button class="media-btn">
                    Lue lisää
                </button>
            </div>
            <div class="media-image">
                <img src="//placehold.it/1280x1024?text=Product" alt="media" class="image">
            </div>
        </div>

    </section>

</main>


<?php get_footer(); ?>
