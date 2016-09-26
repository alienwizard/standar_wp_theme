<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name');?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
<header>

	<?php
	//WP-nav
	wp_nav_menu(array('theme_location'=>'main-nav','menu_class'=>'nav navbar-nav','container_class'=>'','container_id'=>''));


	?>
</header>
