<?php get_header(); ?>

	<div class="full-width">
		<code>this is search.php</code><br />

		<?php if(have_posts()) :
			while(have_posts()) : the_post(); ?>

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>

			<?php endwhile;
		endif;
		?>
		
	</div>		

<?php get_footer(); ?>




