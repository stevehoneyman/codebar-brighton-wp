<?php get_header(); 
/* Template Name: Page with static sidebar */
?>

	<div class="full-width group">
		<!--<code>this is side.php</code><br />-->

		<section class="seventy">
			<?php get_template_part('templates/loop')?>	
		</section>

		<aside class="thirty">
			<?php get_sidebar(); ?>
		</aside>
		
	</div>
	
<?php get_footer(); ?>




