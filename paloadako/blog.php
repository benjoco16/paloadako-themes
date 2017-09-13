<?php 
/*
Template Name: Blog Page
*/
get_header(); ?>
<!-- MID -->

<div id="mid-hldr page">	
	<div class="container">
		
		<div class="page-content-hldr">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content();?>
			<?php endwhile; endif; ?>
			
			<ul class="blog-hldr">
				<?php 
					$args = array( 'post_type' => 'post', 'showposts' => 3);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
					<li>
						<div class="blog-title"><a href="<?php the_permalink()?>"><?php the_title();?></a></div>
						<div class="post-date">Posted: <?php echo get_the_date(); ?></div>
						
						<?php if(has_post_thumbnail()) { ?>
							<div class="blog-thumbnail"><a href="<?php the_permalink();?>"><?php the_post_thumbnail( array(129, 129) );?> </a></div>
						<?php } ?>
						
						<span class="title-desc"><p><?php echo substr(get_the_excerpt(), 0,480); ?> <a href="<?php the_permalink();?>">read more >></a> </p></span>
						<div class="clear"></div>
					</li>
					
				<?php endwhile; ?>
			</ul>
		</div>
		
		<?php get_sidebar('blog'); ?>
   </div>
</div>
<!--/MID -->

<?php /*?><?php get_template_part( 'sidebar', 'index' ); ?><?php */?>
<?php get_footer(); ?>