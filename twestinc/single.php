<?php
/*
Template Name: Single Template
 */
 ?>
 <?php get_header(); ?>
  <div id = "wrapper" class = "clearfix">
 <main>
 <b>single template</b><br>
 <b>Start WordPress Loop</b><br>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <b>Post Title:</b><?php the_title(sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>'); ?><br>
<b>Post Content:</b><?php  the_content(); ?><br><br><br>
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
 </div>
 <?php get_footer(); ?>
