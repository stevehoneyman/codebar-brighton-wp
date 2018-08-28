	<footer role="contentinfo" class="group">
		<code>This is footer.php</code>
	</footer>
	
	<div class="credits">
		<p>
			<a href="https://codebar.io">
				<?php the_field('site_credits', 'options'); ?>
			</a>
		</p>
	</div>

</div><!-- site wrapper ends-->

<?php wp_footer(); ?>
</body>	

</html>