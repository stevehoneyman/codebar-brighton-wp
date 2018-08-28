<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	
<?php wp_head(); ?>
</head>

<body>
	
<div id="site-wrapper" class="group">

	<header role="banner">
		<div class="header-top group">	
			<a href="#">
				<img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" class="logo">
			</a>
			<a href="#" class="navicon"><i></i><i></i><i></i></a>
		</div>

		<nav class="main-nav-container group">
			<?php wp_nav_menu(array( 
				'menu_class' => 'main-nav',
				'menu_id' => 'nav',
				'theme_location' => 'header-menu', 
			));?>	
		</nav>

		<div class="masthead wrap">
			<code>This is header.php</code>
		</div>
	</header>
	
	
	






