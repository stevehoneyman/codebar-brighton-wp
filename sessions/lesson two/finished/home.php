<?php get_header(); ?>

	<code>this is home.php</code><br />

	<?php if(have_posts()) :
		while(have_posts()) : the_post(); ?>

			<article class="listing group">	
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<?php the_excerpt(); ?>
			</article>
			
		<?php endwhile;
	endif;
	?>		

<?php get_footer(); ?>




