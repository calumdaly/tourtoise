<?php
/*
Template Name: City Page Template
Template Post Type: page
*
*/

get_header();
?>

<!-- City Page content -->
<?php while ( have_posts() ) : the_post(); ?>
    <div class="tourtoise_page_intro_wrapper">
        <div class="tourtoise_page_title">
            <h1><?php echo get_field('city_name'); ?> Tours</h1>
        </div>

        <div class="tourtoise_page_details">
            <?php echo get_field('city_details_text'); ?>
        </div>
    </div>
    
    
    <section class="tourtoise_content_card_wrapper container-fluid g-0">
        <div class="tourtoise_content_card_row row g-0 p-4">
            <?php the_content(); ?>
        </div>
    </section>
<?php endwhile; // end of the loop. ?>
<!-- City Page content -->


<?php get_footer(); ?>