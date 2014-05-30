<?php
/*
Template Name: about page template
*/
?>

<?php if ( is_front_page() ) {
    get_header( 'home' );
} else {
    get_header();
} ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>


<?php get_footer(); ?>

