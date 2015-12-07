<?php

// Widgets
if ( function_exists('register_sidebar') )
	register_sidebar('name=Homepage List (left)');
	register_sidebar('name=Homepage List (right)');
	register_sidebar('name=Gallery');
	register_sidebar('name=Blog');
	register_sidebar('name=Testimonials');

// Breadcrumbs
function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo "</a> » ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " » ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}

// Mobile Redirect
function mobile_redirect() {
    global $is_mobile;
    if ( $is_mobile ) {
        header( 'Location: http://m.thermalkingwindows.com' );
        exit;
    }
}
add_action('after_setup_theme', 'mobile_redirect');

?>
