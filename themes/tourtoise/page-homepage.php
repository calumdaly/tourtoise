<?php
/*
Template Name: Homepage Template
Template Post Type: page
*
*/

get_header();
?>

<!-- Homepage content -->
<section class="tourtoise_content_card_wrapper container-fluid g-0">
    <div class="tourtoise_content_card_row row g-0 p-4">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
    </div>
</section>
<!-- //Homepage content -->

<?php get_footer(); ?>