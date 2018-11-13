<?php get_header(); 
/* Template Name: Page with dynamic sidebar */
?>

	<div class="full-width group">
		<!--<code>this is side.php</code><br />-->

		<section class="seventy">
			<?php get_template_part('templates/loop')?>	
		</section>

		<aside class="thirty">
			<h2>This is a dynamic sidebar</h2>
			<?php dynamic_sidebar('right-sidebar'); ?>
		</aside>
		
	</div>

<?php get_footer(); ?>




