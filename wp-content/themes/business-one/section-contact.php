<?php global $business; ?>

<?php /* Template Name: Contact */ 
if(is_front_page()){

	get_header();

}else{

	get_header();

	get_header('blog'); ?>

	
	<style>

		.section-contact{
			padding-top: 5em;
		}

	</style>


<?php }


/*
$homepage=get_posts(array(
	'post_type' => 'page',
	'posts_per_page' => 20
));

foreach($homepage as $post){ 

$contact=get_post_meta($post->ID,'_wp_page_template',true);

if(true){*/ ?>

<!-- CONTACT -->
<section class="section-contact" id="contact">

	<header class="heading-wrap">
				
		<h2 class="section-head"><?php echo $business['contact-headline']; ?></h2> <!-- end section-head -->		

	</header> <!-- end heading-wrap -->
	

	<div class="google-map">					
					
		<div class="map-container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2652.4386035715306!2d14.289880751189382!3d48.33287427913764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477399b51f700df5%3A0x4830e23e25c4fd36!2sFerdinand-Markl-Stra%C3%9Fe+2%2C+4040+Linz!5e0!3m2!1sde!2sat!4v1474762640156" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	 	<!--<?php $location = get_field('google_map');
							 
			if( !empty($location) ): ?>
							
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>

		<?php endif; ?>				 -->

	</div> <!-- end google-map -->



		<div class="container">
					
					<div class="contact-way col-sm-8 col-sm-offset-2">

						<div class="contact-wrap col-sm-5">
								
							<address class="h-adr">
								<h4 class="company-name"><?php echo $business['slider-title']; ?></h4>
								<span class="p-street-address"><?php echo nl2br($business['slider-text']); ?></span>
							</address> <!-- end h-adr -->	
							
						</div> <!-- end contact-wrap -->

						<div class="form-wrap col-sm-6 pull-right">
							<h4 class="company-name"><?php echo $business['contact-impressum_headline']; ?></h4>
							<span class="p-street-address"><?php echo nl2br($business['contact-impressum']); ?></span>
						</div>

						<?php wp_reset_postdata(); ?>


					</div> <!-- end contact-way -->

		</div> <!-- end container -->		

		


</section>
<!-- END CONTACT -->

<?php //} }

if(is_front_page()){

	get_footer();

}else{

	get_footer('home');

	get_footer();

}