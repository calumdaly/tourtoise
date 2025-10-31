<?php
/**
* Child theme functions.php
* @subpackage calumdaly
*/


/******************************************************************/

//** CONTENT

// i) Debugging tools
//
//
// 1) Load parent theme styling, other styling, scripts and fonts | wp_enqueue_script(); wp_enqueue_script();
//
//
// 2) Register the navigation menu | register_my_theme_menus()


/******************************************************************/


/*
//i) Debugging tools
// (Remember to change WP_DEBUG to 'true' in wp-config.php.
// (We're using 'live' and 'local' wp-config files to avoid debugging mode on production site.)

//print_r($wpdb->queries);
global $post; // set global variable
print_r($post); // list all psot object values
*/



//*****************************************************************


// 1) Load parent theme styling, other styling, scripts and fonts || wp_enqueue_script(); wp_enqueue_script();
add_action( 'wp_enqueue_scripts', 'calumdaly_theme_enqueue_styles');

function calumdaly_theme_enqueue_styles(){

    //Load parent stylesheet 
    //('get_template_directory' points to the main template theme dir - parent in this case...)
    //('get_stylesheet_directory' points to the stylesheet in current directory)
    wp_enqueue_style('twentytwentyfive', get_template_directory_uri() . '/style.css');


    //Load additional styles
    wp_enqueue_style('tourtoise-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '1' /*time()*/, 'screen'); // Child stylesheet (time() function used to bust caching in dev - increment ver num when update complete)


    // Load scripts
    wp_enqueue_script('tourtoise-custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '1' /*time()*/ ); //(time() function used to bust caching in dev - increment ver num when update complete)

}




//*****************************************************************


// 2) Register the navigation menu

function register_my_theme_menus() {
    register_nav_menus(
        array(
            'main_nav' => __( 'Main Navigation Menu' ),
        )
    );
}
add_action( 'init', 'register_my_theme_menus' );