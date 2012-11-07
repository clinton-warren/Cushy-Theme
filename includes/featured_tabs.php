		<div id="content-repeat">

			<div id="content-left">

				<div class="container clearfix">

					<div id="content" class="clearfix" style="margin-top:-15px;">
					
						<?php 
							// Begin News Loop
							$get_news = new WP_Query( '&showposts=1&cat=6' );
 							while ($get_news->have_posts()) : $get_news->the_post();
						?>
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
							
						
							
 						<?php 
							// End News Loop
							endwhile; 
						?>
					
					</div>
				</div>
			</div>
		</div>
		
		<div id="news">
		
			<div class="container clearfix">
			
				<div id="recent-news">
					
					<div class="posted">
						<?php 
							// Begin News Loop
							$get_news = new WP_Query( '&showposts=1&cat=7'  );
 							while ($get_news->have_posts()) : $get_news->the_post();
						?>
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
							
						
							
 						<?php 
							// End News Loop
							endwhile; 
						?>
													
					</div><!-- End post -->
					
				</div><!-- End recent-news -->
				
				<div id="from-the-blog">
				
					<a href="<?php echo bloginfo('url') . get_option( 'woo_blog_permalink' ); ?>" class="view-blog"><?php _e('View the Blog',woothemes); ?> &raquo;</a>			
											
					<?php 
						// Begin Blog Loop
						$get_news = new WP_Query( 'showposts=2&cat='.get_cat_id( get_option( 'woo_blog_cat' ) ).'&offset=1' );
 						while ($get_news->have_posts()) : $get_news->the_post();
					?>
						<div class="posted">
					
							<h3><a href="<?php the_permalink(); ?>" title="<?php _e('Permalink to',woothemes); ?> &quot;<?php the_title(); ?>&quot;"><?php the_title(); ?></a></h3>
							
							<p><?php the_content_rss('Read More', FALSE, '', 20); ?></p>
							
						</div><!-- End post -->
							
 					<?php 
						// End Blog Loop
						endwhile; 
					?>
												
				</div><!-- End from-the-blog -->
				
			</div><!-- End container -->
			
		</div><!-- End news -->