<?php 
/* Template Name: Custom */
get_header(); ?>

	<code>this is custom.php</code><br />

	<?php get_template_part('templates/loop')?>	

	<!-- ACF code block for use in week three ===========================-->
	
	<?php if (is_page('Custom')) { the_field('examp_one'); } ?>
	
	<!--=================================================================-->

<?php get_footer(); ?>




