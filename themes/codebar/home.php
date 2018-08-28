<?php get_header(); ?>

	<section class="group">

		<?php if (have_posts()) : 
			while (have_posts()) : the_post(); ?>

				<article class="half-width">
					<p><?php the_title(); ?></p>
				</article>
			
			<?php endwhile; 
		endif;	
		?>	

	</section>

<?php get_footer(); ?>