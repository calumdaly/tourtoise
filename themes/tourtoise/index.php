<?php
/**
* Main Index page template
* @subpackage TourToise
*/

get_header();
?>

<?php //echo 'index.php'; ?>

<!-- index content -->
<section class="">


<?php $myposts = get_posts();
foreach( $myposts as $post) : setup_postdata( $post ) ?>
    
    <h1><?php // the_title(); ?></h1>
    
    <?php the_content(); ?>
    
    <?php /*the_excerpt();*/ ?>

<?php endforeach; ?>

</section>
<!-- /index content -->

<?php get_footer(); ?>