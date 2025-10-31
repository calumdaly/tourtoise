<?php
/*
Template Name: City Card Template
Template Post Type: page, post
*/
?>

<!-- city card -->

<!-- INSERT PAGES WILL ADD DIV THAT LOOKS LIKE THE FOLLOWING: -->
<!-- <div data-post-id="17" class="insert-page insert-page-17 "> -->

<?php while ( have_posts() ) : the_post(); ?>

    <?php $image_id = get_field('city_thumbnail'); //get the image object?>

    <div class="tourtoise_content_card col g-0" style="background: linear-gradient(to top, rgba(58,58,58, 1) 0%, rgba(58,58,58, 0) 50%), url(<?php echo esc_url($image_id['url']); ?>);">
        <div class="tourtoise_content_card_copy row g-0">
            <div>
                <h2><?php echo get_field('city_name'); ?></h2>
                <br/>
                <h3><?php echo get_field('country_name'); ?></h3>
            </div>
        </div>

        <div class="tourtoise_content_card_details_content row g-0">
            <?php echo get_field('city_details_text'); ?>
        </div>

        <div class="tourtoise_content_card_buttons row g-0">
            <button class="tourtoise_details_button col">
                <span class="tourtoise_details_button_icon">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="15" cy="15" r="15" fill="#74FFDE"/>
                        <path d="M14 17C14 16.4477 13.5523 16 13 16H9C8.44772 16 8 15.5523 8 15C8 14.4477 8.44772 14 9 14H13C13.5523 14 14 13.5523 14 13V9C14 8.44772 14.4477 8 15 8C15.5523 8 16 8.44772 16 9V13C16 13.5523 16.4477 14 17 14H21C21.5523 14 22 14.4477 22 15C22 15.5523 21.5523 16 21 16H17C16.4477 16 16 16.4477 16 17V21C16 21.5523 15.5523 22 15 22C14.4477 22 14 21.5523 14 21V17Z" fill="#3A3A3A"/>
                    </svg>
                </span>
                
                <span class="ms-3">Details</span>
            </button>
            <div class="col text-end">
                <a href="<?php the_permalink(); ?>">Enter</a>
            </div>
        </div>
        
    </div>
<?php endwhile; // end of the loop. ?>
<!-- //city card -->