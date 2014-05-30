<?php if ( is_front_page() ) {
    get_header( 'home' );
} else {
    get_header();
} ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row">
  <div class="col-md-9">
	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
  </div>
  <div class="col-md-3">
	<?php get_sidebar(); ?>	
  </div>
</div>

<?php get_footer(); ?>
