			<div id="news">
			
				<div class="container clearfix">
				
					<div id="recent-news">
						
						<div class="posted">
							<?php 
								// Begin News Loop
								$get_news = new WP_Query( '&showposts=1&cat='.get_cat_id( get_option( 'woo_blog_cat' ) ) );
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
					
					<div class="flexslider">
						<ul class="slides">
						<?php $custom_query = new WP_Query(array('post_type'=>'gallery','posts_per_page' => -1)); //
						while($custom_query->have_posts()) : $custom_query->the_post(); ?>
							<li><?php the_post_thumbnail();?></li>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); // reset the query ?>
						</ul>
					</div>
				
													
					</div><!-- End from-the-blog -->
					
				</div><!-- End container -->
				
			</div><!-- End news -->