<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
		
	<title><?php bloginfo('title')?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body>

	<div id="site-wrapper">
		<header role="banner">
			<!--<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>-->
			<nav role="navigation">
				<?php wp_nav_menu(); ?>
			</nav>		
		</header>

		<div class="content" role="main">


		<!--==========================================================================

		<?php wp_nav_menu(array( 
			'menu_class' => 'main-nav',
			'menu_id' => 'nav',
			'theme_location' => 'header-menu', 
			'container' => ''
		));?>


		============================================================================-->	