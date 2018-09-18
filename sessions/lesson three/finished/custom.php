<?php 
/* Template Name: Custom */
get_header(); ?>

	<div class="full-width">
		<code>this is custom.php</code><br />

	<!--================ content from basic content area ======================-->	

		<?php get_template_part('templates/loop')?>	

	</div>	

	<!--================ content from ACF =====================================-->
		
	<section class="full-width">
		<img src="<? the_field('hero_image'); ?>" />
	</section>

	<section>	
		<p><? the_field('content_block'); ?></p>
	</section>
	
<?php get_footer(); ?>




