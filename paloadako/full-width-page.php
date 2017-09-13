<?php
/**
 * Template Name: Full-width, no sidebar
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage WP-Skeleton
 */

get_header(); 
?>

<div id="mid-hldr page" class="page-hldr">	
	<div class="container">
		<div class="page-content-hldr">
			<div class="page-title"><?php the_title(); ?></div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content();?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			<div class="clear"></div>
		</div>	
   </div>

</div>

<!--/MID -->



<?php get_footer(); ?>