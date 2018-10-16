<?php get_header(); ?>

	<div class="full-width">
		<code>this is page.php</code><br />

		<?php get_template_part('templates/loop')?>	


		<!--================================================================== 
			
		<?php if (is_page('Supplementary')) { the_field('basic'); } ?>

		===================================================================-->

		<!--==================================================================
		
		<?php // set variable, use get to pull in data from appropriate field 
			$data =  get_field('basic'); ?> 
		
		<?php // if page is supplementary echo out content in html
			if (is_page('Supplementary')) { 

				// echo '<div>' . the_field('basic') . '</div>'; 
				echo '<div class="test">' . $data . '</div>'; 
				echo '<div class="test">' . $data . '</div>'; 

		} ?>
		===================================================================-->
	</div>
<?php get_footer(); ?>




