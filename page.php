<?php get_header(); ?>

<main class="site-main">
  <div class="inner-900">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
    </div>
</main>

<?php get_footer(); ?>
