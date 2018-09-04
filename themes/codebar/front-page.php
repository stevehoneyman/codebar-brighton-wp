<?php 
/* 
* Template Name: Home Page
*/ 

get_header(); 

$fp_custom_posts = new WP_Query(array(
	'post_type' => 'cpt',
	'order' => 'ASC',
	'posts_per_page' => 2
)); 


$fp_blog_posts = new WP_Query(array(
    'post_type' => 'post',
    'order' => 'ASC',
    'posts_per_page' => 4
//  'category_name' => 'featured'
));
?>

<div class="container">

	<section class="content">
		<p>Home content</p>
	</section>	

	<section class="grid group">
		
		<!-- custom post type loop using wp-query rather than standard loop -->
		<?php if (have_posts()) : 
			while ($fp_custom_posts->have_posts()) : $fp_custom_posts->the_post(); ?>	
		
				<div class="half-width">

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<!-- pull in featured images with width and height attributes removed-->
					<?php
        				$thumbnail_id = get_post_thumbnail_id();
						$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
					?>
					
					<!--<img src="<?php echo $thumbnail_url[0]; ?>">-->
					
				</div>
			
			<?php endwhile; 
			wp_reset_postdata(); 
		endif; ?>
	
	</section>	

	<section class="group">
		
		<!-- blog post loop using wp-query rather than standard loop -->
		<?php if (have_posts()) :
			while ($fp_blog_posts->have_posts()) : $fp_blog_posts->the_post(); ?>
	
				<div class="box">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>
				
			<?php endwhile; 
			wp_reset_postdata(); 
		endif; ?>

	</section>	
</div>
	
<?php get_footer(); ?>


