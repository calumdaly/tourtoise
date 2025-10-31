<?php
/**
* Page template
* @subpackage TourToise
*/

get_header();
?>

<?php //echo 'index.php'; ?>

<!-- page content -->
<section class="">

<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; // end of the loop. ?>

</section>
<!-- /page content -->

<?php get_footer(); ?>