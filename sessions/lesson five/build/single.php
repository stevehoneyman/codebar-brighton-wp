<?php get_header(); ?>

	<div class="full-width">
		<code>this is single.php</code><br />

		<?php if (is_single(102))  echo 'steve is a twat' ?>

		<?php if(have_posts()) :
			while(have_posts()) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

			<?php endwhile;
		endif;
		?>	
	</div>	

<?php get_footer(); ?>




