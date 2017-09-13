<?php 
/*
Template Name: 2 Columns
*/
get_header(); ?>
<!-- MID -->
<div id="mid-hldr page" class="page-hldr">	
	<div class="container">		<div class="page-content-hldr left">			<div class="page-title"><?php the_title(); ?></div>			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content();?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			<div class="clear"></div>
		</div>	
		<?php get_sidebar(); ?>
   </div>
</div>
<!--/MID -->

<?php get_footer(); ?>