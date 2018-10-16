<?php 
/* Template Name: Minna's Page */
get_header();

// declare variables at top of document to seperate concerns

$fp_upcoming = new WP_Query(array(
    'post_type' => 'post',
    'order' => 'ASC',
    'posts_per_page' => 3,
    'category_name' => 'upcoming'
));

$fp_past = new WP_Query(array(
    'post_type' => 'post',
    'order' => 'ASC',
    'posts_per_page' => 3,
	'category_name' => 'past'
));
?>
	


<!--====== Custom WP_Query Loop pulling in content from blog posts by category ==============-->

<div class="minna-wrapper-home group">
	<section class="minna-col green group">

		<h2>Upcoming</h2>

		<!-- blog post loop using wp-query rather than standard loop -->
		<?php if (have_posts()) :
			while ($fp_upcoming->have_posts()) : $fp_upcoming->the_post(); ?>
	
				<div>
					<!--<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
					<!-- pull in featured images with width and height attributes removed-->
					<?php
        				$thumbnail_id = get_post_thumbnail_id();
						$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
					?>
					
					<img src="<?php echo $thumbnail_url[0]; ?>">
					
				</div>
				
			<?php endwhile; 
			wp_reset_postdata(); 
		endif; ?>

	</section>

<!--====== Custom WP_Query Loop pulling in content from blog posts by category ==============-->

	<section class="minna-col peach group">

		<h2>Past</h2>

		<!-- blog post loop using wp-query rather than standard loop -->
		<?php if (have_posts()) :
			while ($fp_past->have_posts()) : $fp_past->the_post(); ?>
	
				<div>
					<!--<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
					<!-- pull in featured images with width and height attributes removed-->
					<?php
        				$thumbnail_id = get_post_thumbnail_id();
						$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
					?>
					
					<img src="<?php echo $thumbnail_url[0]; ?>">
					
				</div>
				
			<?php endwhile; 
			wp_reset_postdata(); 
		endif; ?>

	</section>	
</div>		

<?php get_footer(); ?>




