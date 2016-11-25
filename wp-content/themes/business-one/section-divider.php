<?php global $business; 

if(isset($business['divider-text'])){

if($business['divider-text']){ 

?>

<!-- DIVIDER -->
<section class="section-divider-one" id="divider-one" data-parallax="scroll" data-image-src="<?php echo $business["divider-bg"]["url"];?>">
	
	<div class="container">
		<h2 class="heading-divider"><?php echo $business['divider-text']; ?></h2>
	</div>
	
</section> <!-- end divider -->
<!-- END DIVIDER -->

<?php } } ?>