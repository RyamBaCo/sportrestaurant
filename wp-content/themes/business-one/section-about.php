<?php global $business; ?>

<!-- ABOUT -->

	<section class="section-about col-sm-12" id="about">

			<div class="container" id="essn">
				
				<header class="heading-wrap">
				
					<h2 class="section-head"><?php echo $business['about-headline']; ?></h2> <!-- end section-head -->

					<?php if(isset($business['about-text'])){

					if($business['about-text']){ ?>

						<div class="heading-line"></div>

						<p class="heading-desc"><?php echo nl2br($business['about-text']); ?></p>

					<?php } } ?>

				</header> <!-- end heading-wrap -->



				<?php if(get_posts(array('post_type' => 'about'))){ ?>

					<div class="meal-wrap">

					<?php 
					$today = getdate();
					query_posts(array(
						'date_query' => array(
							'column'  => 'post_date',
							'after' => 'today midnight'
							),
						'post_status' => any,
					    'post_type' => 'about',
						'order' => 'ASC'
					));

//					'post_type=about & year =' . $today['year'] . '& monthnum =' . $today['mon'] . '& day =' . $today['mday'] . ' & order=ASC & post_status="any"'); ?>

					<?php while(have_posts()):the_post(); ?>

						<div class="h-date_entry">
				
							<h3 class="p-date_title"><?php the_date('l, j.m.Y'); ?></h3>

							<div class="p-desc">
								<?php the_content(); ?>
							</div> <!-- end p-desc -->
						
						</div> <!-- end h-resume -->

					<?php endwhile; ?>

					<?php wp_reset_query(); ?>

					</div> <!-- end meal-wrap -->

				<?php } ?>



				<?php if(get_posts(array('post_type' => 'skill'))){ ?>

				<div class="skill-wrap col-sm-6">

						<h4><?php _e('Skills','business-one'); ?></h4>

						<?php query_posts('post_type=skill'); ?>

						<?php while(have_posts()):the_post(); ?>

						<?php if(get_field('progress_bar_rate_1')){ ?>	

							<span class="progress-title"><?php the_title(); ?></span>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="<?php the_field('progress_bar_rate_1'); ?>" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
							    <?php the_field('progress_bar_rate_1'); ?>%
							  </div>
							</div>

						<?php } ?>

						<?php endwhile; ?>

						<?php wp_reset_query(); ?>

				</div> <!-- end skill-wrap -->
				
				<?php } ?>					

					<?php if(isset($business['about-textarea'])){ ?>

						<?php if($business['about-textarea']){ ?>

						<div class="history-wrap col-sm-6">

							<h4><?php _e('History','business-one'); ?></h4>
							
							<p><?php echo $business['about-textarea']; ?></p>

						</div> <!-- end history-wrap -->

					<?php } } ?>
			

			</div> <!-- end container -->

			
	</section>

<!-- END ABOUT -->
