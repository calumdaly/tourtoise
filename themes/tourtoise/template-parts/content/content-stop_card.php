<?php
/*
Template Name: Stop Card Template
Template Post Type: post
*/
?>

<!-- stop card content -->
<div class="">

<?php while ( have_posts() ) : the_post(); ?>
    
    <div >

    </div>
    <!-- card title -->
    <?php the_title(); ?>
    <!-- //card title -->


    <!-- card map links -->
    <div class="link_detials">
        
        <?php echo get_field('google_maps_link') ?>
        <br/>
        <?php echo get_field('apple_maps_link') ?>
    </div>
    <!-- //card map links -->


    <!-- card soundcloud link -->
    <iframe width="100%" height="125" scrolling="no" frameborder="no" allow="autoplay" src="<?php echo get_field('audio_link_path') ?>&color=%2389a1ef&auto_play=false&hide_related=true&show_comments=false&show_user=false&show_reposts=false&show_teaser=false&visual=false"></iframe>
    <!-- //card soundcloud link -->

    <!-- card content -->
    <?php the_content(); ?>
    <!-- //card content -->

<?php endwhile; // end of the loop. ?>

</div>
<!-- //stop card content -->