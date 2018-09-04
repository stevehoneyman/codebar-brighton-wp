<?php get_header(); ?>

	<code>this is single.php</code><br />

	<?php if(have_posts()) :
		while(have_posts()) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>

		<?php endwhile;
	endif;
	?>		

<?php get_footer(); ?>




