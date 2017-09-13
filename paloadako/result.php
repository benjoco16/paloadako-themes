<?php get_header(); ?>
<!-- MID -->
<div id="mid-hldr page">	
	<div class="container">
		
		<div class="page-content-hldr">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content();?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			
			<h3><?php the_field('home_list_title')?></h3>
			<div class="clear"></div>
			<?php if(get_field('lists')): ?>
					<?php while(has_sub_field('lists')): ?>
						<div class="list-hldr">
							<?php the_sub_field('lists_editor'); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			<div class="clear"></div>
		</div>
		
		<?php get_sidebar('home'); ?>
   </div>
</div>
<!--/MID -->
	
<?php /*?><?php get_template_part( 'sidebar', 'index' ); ?><?php */?>

<?php get_footer(); ?>