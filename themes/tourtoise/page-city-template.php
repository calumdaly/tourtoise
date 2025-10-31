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
    <div class="tourtoise_page_intro_wrapper container-fluid g-0">
        <div class="tourtoise_page_intro_top row g-0">
            <div class="tourtoise_page_title">
                <h1><?php echo get_field('city_name'); ?> Tours</h1>
            </div>

            <div class="tourtoise_page_details_button">
                <button id="page_detail_button">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="10" fill="#74FFDE"/>
                        <path d="M10.7431 13.5902C10.3526 13.9807 9.71945 13.9807 9.32893 13.5902L5.26126 9.52252C4.91297 9.17423 4.91297 8.60955 5.26126 8.26126C5.60955 7.91297 6.17423 7.91297 6.52252 8.26126L9.32893 11.0677C9.71945 11.4582 10.3526 11.4582 10.7431 11.0677L13.5495 8.26126C13.8978 7.91298 14.4625 7.91298 14.8108 8.26126C15.1591 8.60955 15.1591 9.17424 14.8108 9.52252L10.7431 13.5902Z" fill="#1C1B1F"/>
                    </svg>

                    More Details
                </button>
            </div>
        </div>

        <div class="tourtoise_page_details row g-0">
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