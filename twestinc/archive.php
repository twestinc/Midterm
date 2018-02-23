<?php
/*
Template Name: Archive Template
 */
 ?>
 <?php get_header(); ?>
 <main>
 <b>archive template</b><br>
 <b>Start WordPress Loop</b><br>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'template-parts/title/title'); ?> <br><br>
<?php get_template_part( 'template-parts/thumbnail/thumbnail'); ?> <br><br><br><br>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<b>End WordPress Loop</b>
 </main>
<?php get_footer(); ?>