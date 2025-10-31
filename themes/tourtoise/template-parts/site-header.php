<?php
/**
 * Main site menu and content
 * @package tourtoise
 */
?>

<body <?php body_class(); ?>>
	<!-- Header -->
	<header class="tourtoise_header_wrapper container-fluid g-0 pt-4">
		<div class="tourtoise_header row g-0 px-3 px-xl-0">
			<div class="tourtoise_header_logo col">
				<a href="<?php echo get_home_url()?>">
					<img aria-hidden="true" src="<?php echo get_template_directory_uri()?>/assets/images/tourtoise_logo_colour_text.svg"/>
					<!-- logo for later: tourtoise_logo.svg -->
					<h1 class="screen_reader_content">TourToise</h1>
				</a>
			</div>

			<div class="tourtoise_header_text col text-center">
				<h2 class="mx-auto text-start">
					Take a walk.
					<br/>
					See your city in a different light.
				</h2>
			</div>

			<!-- desktop menu -->
			<div class="tourtoise_header_nav col">
				<?php
					if ( has_nav_menu( 'main_nav' ) ) {
						wp_nav_menu(
							array(
								'theme_location' => 'main_nav',
							)
						);
					}
				?>
			</div>
			<!-- //desktop menu -->


			<!-- mobile menu -->
			<div class="tourtoise_header_nav_mobile col">
				<div class="tourtoise_header_nav_mobile_buttons">
					<button class="tourtoise_header_nav_mobile_buttons_open">
						<svg width="60" height="47" viewBox="0 0 60 47" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2 6.66667C0.895432 6.66667 0 5.77124 0 4.66667V2C0 0.895429 0.895431 0 2 0H58C59.1046 0 60 0.895431 60 2V4.66667C60 5.77124 59.1046 6.66667 58 6.66667H2ZM2 46.6667C0.895432 46.6667 0 45.7712 0 44.6667V42C0 40.8954 0.895431 40 2 40H58C59.1046 40 60 40.8954 60 42V44.6667C60 45.7712 59.1046 46.6667 58 46.6667H2ZM2 26.6667C0.895432 26.6667 0 25.7712 0 24.6667V22C0 20.8954 0.895431 20 2 20H58C59.1046 20 60 20.8954 60 22V24.6667C60 25.7712 59.1046 26.6667 58 26.6667H2Z"/>
						</svg>
					</button>
					
					<button class="tourtoise_header_nav_mobile_buttons_close">
						<svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6.5856 57.7574C5.80455 58.5384 4.53822 58.5384 3.75717 57.7574L0.585601 54.5858C-0.195448 53.8047 -0.195448 52.5384 0.5856 51.7574L21.7572 30.5858C22.5382 29.8047 22.5382 28.5384 21.7572 27.7574L0.5856 6.58578C-0.195448 5.80473 -0.195448 4.5384 0.5856 3.75736L3.75717 0.585784C4.53822 -0.195265 5.80455 -0.195265 6.5856 0.585783L27.7572 21.7574C28.5382 22.5384 29.8046 22.5384 30.5856 21.7574L51.7572 0.585783C52.5382 -0.195265 53.8046 -0.195265 54.5856 0.585784L57.7572 3.75736C58.5382 4.5384 58.5382 5.80473 57.7572 6.58578L36.5856 27.7574C35.8046 28.5384 35.8046 29.8047 36.5856 30.5858L57.7572 51.7574C58.5382 52.5384 58.5382 53.8047 57.7572 54.5858L54.5856 57.7574C53.8046 58.5384 52.5382 58.5384 51.7572 57.7574L30.5856 36.5858C29.8046 35.8047 28.5382 35.8047 27.7572 36.5858L6.5856 57.7574Z"/>
						</svg>
					</button>
				</div>
			</div>
			<!-- //mobile menu -->


		</div>

		<div class="tourtoise_header_nav_mobile_content_wrapper row px-3 px-xl-0">
			<div class="tourtoise_header_nav_mobile_content col">
				<?php
					if ( has_nav_menu( 'main_nav' ) ) {
						wp_nav_menu(
							array(
								'theme_location' => 'main_nav',
							)
						);
					}
				?>
			</div>
		</div>
	</header>
	<!-- //Header -->

	<!-- breadcrumbs! -->
	<?php if ( !is_front_page() ) {
		echo '<div class="tourtoise_breadcrumb_wrapper container-fluid px-3 px-xl-0">';
		echo '<div class="tourtoise_breadcrumb_row">';
			$post_id = get_the_ID(); // Get the ID of the current post/page
			$ancestor_ids = get_post_ancestors( $post_id ); // Retrieve the ancestor IDs
			
			// Loop through the IDs to get more information about each ancestor
			if ( ! empty( $ancestor_ids ) ) {
				foreach ( $ancestor_ids as $ancestor_id ) {
					$ancestor_title = get_the_title( $ancestor_id );
					$ancestor_link = get_permalink( $ancestor_id );
					echo '<a class="tourtoise_breadcrumb" href="' . $ancestor_link . '">' . $ancestor_title . '</a>';
				}
			}
		
		echo '</div>';
	echo '</div>';
	} ?>
	<!-- //breadcrumbs! -->

<!-- PAGE MAIN CONTENT -->
<div class="tourtoise_main_content_wrapper px-3 px-xl-0">