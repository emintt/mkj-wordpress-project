<?php get_header(); ?>

    <section class="hero">
      <div class="hero-text">
        <h1>Welcome to our website</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri() . '/images/map.svg' ?>" alt="Hero">
    </section>

  <main>
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
