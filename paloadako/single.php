<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
 get_header();
?>
<div id="mid-hldr page">	
		<div class="container">
			
			<div class="full-page-content-hldr single-page">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_post_thumbnail();?>
					<br/><br/>
					<?php the_content();?>
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				<div class="clear"></div>
				
			</div>

	   </div>
	</div>
  <?php get_footer();?>  
                               