<?php
/**
Famous People Template
 **/
 ?>
 <?php get_header(); ?>
 <div id = "wrapper" class = "clearfix">
	 <main>
		 <b>category-celebrity-famous-people template</b><br>
		 <b>Start WordPress Loop</b><br>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/title/title'); ?> <br><br>
		<?php get_template_part( 'template-parts/thumbnail/thumbnail'); ?> <br><br>
		<?php get_template_part( 'template-parts/post/content'); ?> <br><br><br>
		
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