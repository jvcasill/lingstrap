<?php
/*
Template Name: nobar
*/
?>

<?php if ( is_front_page() ) {
    get_header( 'home' );
} else {
    get_header();
} ?>


<div class="row">
  <div class="col-md-12">
	<?php the_content(); ?>
  </div>
</div>


<?php get_footer(); ?>

