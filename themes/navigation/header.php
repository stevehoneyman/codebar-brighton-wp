<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
		
	<title><?php bloginfo('title')?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body class="body">

	<div id="site-wrapper">
		<header role="banner">
			<div class="header-top group">	
				<a href="#" class="navicon"><i></i><i></i><i></i></a>
			</div>

			<nav class="main-nav-container group">
				<?php wp_nav_menu(array( 
					'menu_id' => 'nav',
					'menu_class' => 'main-nav',
					'theme_location' => 'header-menu',
					'container' => ''
				));?>	
			</nav>
		</header>	

		<!--<?php echo get_template_directory_uri() ?>-->

		

