<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
		
	<title>Theme Title</title>	
	<!--<title><?php bloginfo('title')?></title>-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body>

	<div id="site-wrapper">
		<header role="banner">
			<code>this is header.php</code>
			<!--<h1>Page Title</h1>-->
			<!--<h1><?php bloginfo('title')?></h1>-->
			<nav role="navigation">
				<!--<?php wp_nav_menu(); ?>-->
			</nav>	
		</header>

		<div class="content" role="main">