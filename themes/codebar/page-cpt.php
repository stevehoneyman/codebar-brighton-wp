<?php 
/* Template Name: CPT Listings Page */
get_header();

$cpt = new WP_Query(array(
	'post_type' => 'cpt',
	'order' => 'ASC'	
)); 
?>
	<section class="content">
		
		<?php if (have_posts()) : 
			while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>
			
			<?php endwhile; 
		endif;	
		?>		

	</section>

	<section class="group">
		<?php 
			if (have_posts()) : 
				while ($cpt->have_posts()) : $cpt->the_post(); ?>
					<?php
						$thumbnail_id = get_post_thumbnail_id();
						$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
					?>
					
					<figure class="half-width">
						<a href="<?php the_permalink();?>">	
							<h2><?php the_title(); ?></h2>
							<!--<img src="<?php echo $thumbnail_url[0]; ?>">-->
						</a>
					</figure>
				
				<?php endwhile; 
				wp_reset_postdata();
			endif; ?>			
	</section>

<?php get_footer(); ?>