<?php get_header();

// declare variables at top of document to seperate concerns

$fp_featured = new WP_Query(array(
    'post_type' => 'post',
    'order' => 'ASC',
    'posts_per_page' => 2,
    'category_name' => 'featured'
));

$fp_blog_posts = new WP_Query(array(
    'post_type' => 'post',
    'order' => 'ASC',
    'posts_per_page' => 4
//  'category_name' => 'featured'
));
?>
	
<!--====== basic looped content from homepage (aka front page in settings) content area ==============-->
	
	<section class="full-width">
		<?php if(have_posts()) :
			while(have_posts()) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php the_post_thumbnail(); ?>

			<?php endwhile;
		endif;
		?>	
	</section>

<!--====== Custom WP_Query Loop pulling in content from blog posts by category ==============-->

	<section class="group">

		<h2>Featured</h2>

		<!-- blog post loop using wp-query rather than standard loop -->
		<?php if (have_posts()) :
			while ($fp_featured->have_posts()) : $fp_featured->the_post(); ?>
	
				<div class="half-width">
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

<!--====== Custom WP_Query Loop pulling in content from blog posts by most recent ==============-->		
		
		<h2>Recent Posts</h2>

		<?php if (have_posts()) :
			while ($fp_blog_posts->have_posts()) : $fp_blog_posts->the_post(); ?>
	
				<div class="box">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<small><?php the_excerpt();?></small>
				</div>
				
			<?php endwhile; 
			wp_reset_postdata(); 
		endif; ?>

	</section>
		

<?php get_footer(); ?>




