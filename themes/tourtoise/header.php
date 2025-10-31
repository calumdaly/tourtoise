<?php
/**
* The Header
* @package tourtoise
*/

?>

<!doctype html>
<html lang="en-GB">
<head>
	<meta name ="viewport" content ="width=device-width, minimum-scale=1.0, initial-scale=1.0">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<!-- //Bootstrap CDN -->

	<!-- Page Title --> 
	<title>
		<?php if(is_front_page() || is_home() ){ ?>
			<?php echo get_bloginfo ( 'name' ) . " | Free Audio Walking Tours ";?>
		<?php } else { ?>
			<?php echo get_bloginfo ( 'name' );?> | <?php echo wp_title('');?>
		<?php } ?>
	</title>
	<!-- //Page Title --> 


	<!-- pull in main WP head meta etc. -->
	<?php wp_head(); ?>
	<!-- //pull in main WP head meta etc. -->

</head>


<?php get_template_part( 'template-parts/site-header'); ?>