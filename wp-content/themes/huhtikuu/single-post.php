<?php
get_header();
?>

  <main >
    <section class="products">
      <article class="single">
        <?php
        if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();
            the_title(before: '<h1 class="single-heading">', after: '</h1>');
            ?>
            <div class="single-content"><?php the_content(); ?></div>
          <?php
          endwhile;
        else :
          _e( 'Sorry, no posts matched your criteria.', 'huhtikuu' );
        endif;
        ?>
      </article>
    </section>
  </main>

<?php
get_footer();
?>