<?php get_header(); ?>

	<code>this is front-page.php</code><br />

	<?php if(have_posts()) :
		while(have_posts()) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			<?php the_post_thumbnail(); ?>

		<?php endwhile;
	endif;
	?>		

	<div class="test">yep</div>

<?php get_footer(); ?>




