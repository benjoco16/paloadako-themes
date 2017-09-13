<?php get_header(); ?>
<!-- MID -->

<div id="mid-hldr page">	
	<div class="container">
		
		<div class="page-content-hldr">
			
			<article id="post-0" class="error404">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'WP-Skeleton' ); ?></h1>
				</header>

				<div class="entry-content">
				  <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'WP-Skeleton' ); ?></p>


				     <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<div class="widget">
					     <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'themename' ); ?></h2>
                                             <ul>
                                             <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 'TRUE', 'title_li' => '', 'number' => '10' ) ); ?>
                                             </ul>
				    </div>

					<?php
					$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'WP-Skeleton' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

				</div><!-- .entry-content -->
				
			</article>
                
			<div class="clear"></div>
		</div>
		
		<?php get_sidebar('blog'); ?>
   </div>
</div>
<!--/MID -->

<?php get_footer(); ?>