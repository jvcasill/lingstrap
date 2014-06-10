<?php 

// Hide the WP admin bar except for admin.
function my_function_admin_bar($content) {
	return ( current_user_can( 'administrator' ) ) ? $content : false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );

		// Register the script like this for a theme:
	wp_register_script( 'parallax-script', get_template_directory_uri() . '/bootstrap/js/parallax.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'parallax-script' );

}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

?>

