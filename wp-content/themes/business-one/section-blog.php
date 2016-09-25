<?php global $business; ?>

<!-- BLOG -->
		<div id="events"></div>
		<section class="section-blog clearfix" id="blog">


			<header class="heading-wrap">
				
				<h2 class="section-head"><?php echo $business['events-headline']; ?></h2> <!-- end section-head -->

			</header> <!-- end heading-wrap -->

			<?php 
				$home_post=get_posts(array(
					'post_type' => 'post',
					'posts_per_page' => 8,
					'order' => 'ASC',
					'post_status' => future
					));
			 ?>


			<div class="meal-wrap">

				<?php 
				if(count($home_post) > 0) {
					foreach($home_post as $post) {
						setup_postdata( $post ); ?>

					<div class="h-date_entry">
					
						<h3 class="p-date_title"><?php the_title(); ?></h3>
						<h4 class="p-date_time"><?php the_date(); ?>, <?php the_time(); ?> Uhr</h4>
						<div class="p-desc">
						  <?php the_content(); ?>
						</div> <!-- end p-desc -->
					
					</div> <!-- end h-resume -->

<!--					<article id="post-<?php the_ID(); ?>" <?php post_class('h-entry col-sm-4 col-md-3'); ?>>
						
						<figure>
							
							<a href="<?php the_permalink(); ?>" class="u-url">
								<?php the_post_thumbnail(); ?>	
							</a>

						</figure>


						<h4 class="entry-title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h4>

					</article> <!-- end h-entry -->	

				<?php 
					} 
				} else { ?>
				<div class="h-date_entry">
					<h3 class="p-date_title"><?php echo $business['events-none_text']; ?></h3>
				</div>
				<?php }
				wp_reset_postdata(); ?>
			</div> <!-- end blog-wrap -->
			


		</section>
		<!-- END BLOG -->

