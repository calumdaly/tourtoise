<?php
/*
Template Name: Tour Playlist Page Template
Template Post Type: page
*
*/

get_header();
?>

<!-- Tour Playlist Page content -->
<div class="tourtoise_page_intro_wrapper container-fluid g-0">
    <div class="tourtoise_page_intro_top row g-0">
        <div class="tourtoise_page_title">
            <h1><?php the_title(); ?></h1>
        </div>

        <div class="tourtoise_page_tour_duration">
            <span>
                <svg width="18" height="23" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 20.7H13.5V17.25C13.5 15.985 13.0594 14.9021 12.1781 14.0013C11.2969 13.1004 10.2375 12.65 9 12.65C7.7625 12.65 6.70313 13.1004 5.82188 14.0013C4.94063 14.9021 4.5 15.985 4.5 17.25V20.7ZM9 10.35C10.2375 10.35 11.2969 9.89958 12.1781 8.99875C13.0594 8.09792 13.5 7.015 13.5 5.75V2.3H4.5V5.75C4.5 7.015 4.94063 8.09792 5.82188 8.99875C6.70313 9.89958 7.7625 10.35 9 10.35ZM0 23V20.7H2.25V17.25C2.25 16.0808 2.51719 14.9835 3.05156 13.9581C3.58594 12.9327 4.33125 12.1133 5.2875 11.5C4.33125 10.8867 3.58594 10.0673 3.05156 9.04187C2.51719 8.01646 2.25 6.91917 2.25 5.75V2.3H0V0H18V2.3H15.75V5.75C15.75 6.91917 15.4828 8.01646 14.9484 9.04187C14.4141 10.0673 13.6687 10.8867 12.7125 11.5C13.6687 12.1133 14.4141 12.9327 14.9484 13.9581C15.4828 14.9835 15.75 16.0808 15.75 17.25V20.7H18V23H0Z" fill="#3A3A3A"/>
                </svg>

                <?php echo get_field('tour_duration'); ?>
            </span>
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
        <?php echo get_field('playlist_details_text'); ?>
    </div>
</div>



<section class="">




<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; // end of the loop. ?>

</section>
<!-- /Tour Playlist Page content -->

<?php get_footer(); ?>