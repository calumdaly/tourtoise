<?php
/*
Template Name: Playlist Card Template
Template Post Type: page, post
*/
?>

<!-- playlist card -->

<!-- INSERT PAGES WILL ADD DIV THAT LOOKS LIKE THE FOLLOWING: -->
<!-- <div data-post-id="17" class="insert-page insert-page-17 "> -->

<?php while ( have_posts() ) : the_post(); ?>

    <?php $image_id = get_field('playlist_thumbnail'); //get the image object?>

    <div class="tourtoise_content_card col g-0" style="background: linear-gradient(to top, rgba(58,58,58, 1) 0%, rgba(58,58,58, 0) 50%), url(<?php echo esc_url($image_id['url']); ?>);">
        <div class="tourtoise_content_card_copy row g-0">
            <div class="">
                <h2><?php the_title(); ?></h2>
            </div>

            <div class="tourtoise_content_card_copy_duration">
                <svg width="18" height="23" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 20.7H13.5V17.25C13.5 15.985 13.0594 14.9021 12.1781 14.0013C11.2969 13.1004 10.2375 12.65 9 12.65C7.7625 12.65 6.70313 13.1004 5.82188 14.0013C4.94063 14.9021 4.5 15.985 4.5 17.25V20.7ZM9 10.35C10.2375 10.35 11.2969 9.89958 12.1781 8.99875C13.0594 8.09792 13.5 7.015 13.5 5.75V2.3H4.5V5.75C4.5 7.015 4.94063 8.09792 5.82188 8.99875C6.70313 9.89958 7.7625 10.35 9 10.35ZM0 23V20.7H2.25V17.25C2.25 16.0808 2.51719 14.9835 3.05156 13.9581C3.58594 12.9327 4.33125 12.1133 5.2875 11.5C4.33125 10.8867 3.58594 10.0673 3.05156 9.04187C2.51719 8.01646 2.25 6.91917 2.25 5.75V2.3H0V0H18V2.3H15.75V5.75C15.75 6.91917 15.4828 8.01646 14.9484 9.04187C14.4141 10.0673 13.6687 10.8867 12.7125 11.5C13.6687 12.1133 14.4141 12.9327 14.9484 13.9581C15.4828 14.9835 15.75 16.0808 15.75 17.25V20.7H18V23H0Z" fill="#3A3A3A"/>
                </svg>

                <?php echo get_field('tour_duration'); ?>
            </div>
        </div>

        <div class="tourtoise_content_card_details_content row g-0">
            <?php echo get_field('playlist_details_text'); ?>
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
<!-- //playlist card -->