<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 **/
 ?>
 <?php get_header(); ?>
 <div id = "wrapper" class = "clearfix">
	 <main>
		 <b>index template</b><br>
		 <b>Start WordPress Loop</b><br>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/title/title'); ?> <br><br>
		<?php get_template_part( 'template-parts/post/content'); ?> <br>
		<?php get_template_part( 'template-parts/thumbnail/thumbnail'); ?> <br><br><br><br>
		
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		<b>End WordPress Loop</b>
	 </main>
	 <div id = "sidebar">
		<div id="sidebar-primary" class="sidebar">
			<?php //dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
		<div id="sidebar-primary" class="sidebar">
			<?php //dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
		<?php  get_sidebar(); ?><br>
		<?php  //get_sidebar('sidebar-1'); ?><br>
		<?php  //get_sidebar('sidebar-2'); ?>
	 </div> <!-- sidebar -->
 </div><!-- wrapper -->
<?php get_footer(); ?>