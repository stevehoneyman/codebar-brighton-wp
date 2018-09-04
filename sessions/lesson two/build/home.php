<?php get_header(); ?>

	<code>this is home.php</code><br />

	<?php if(have_posts()) :
		while(have_posts()) : the_post(); ?>

			<article class="listing group">	
				<h2><?php the_title(); ?></h2>
				<?php the_post_thumbnail(); ?>
				<?php the_excerpt(); ?>
			</article>
			
		<?php endwhile;
	endif;
	?>		

<?php get_footer(); ?>




