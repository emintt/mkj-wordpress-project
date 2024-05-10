<?php get_header(); ?>

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
  else :
    _e('Sorry, no posts matched your criteria.', 'huhtikuu');
  endif;
  ?>

  <?php the_custom_header_markup(); ?>
</section>

<main>
    <section class="menus container">
        <h2 class="text-center my-5">Meidän menu</h2>
        <ul class="row text-center text-lg-start">

            <li class="col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <div class="image-wrapper">
                    <img
                        src="" alt="menu"
                        class="img-fluid img-thumbnail mb-2" />
                </div>
                </a>
            </li>
        </ul>
    </section>

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
