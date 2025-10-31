<?php
/*
Template Name: Tour Playlist Page Template
Template Post Type: page
*
*/

get_header();
?>

<!-- Tour Playlist Page content -->
<section class="">

<?php the_title(); ?>
<?php echo get_field('tour_duration') ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; // end of the loop. ?>

</section>
<!-- /Tour Playlist Page content -->

<?php get_footer(); ?>