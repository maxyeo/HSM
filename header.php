<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width">

		<title>
			<?php 
			if ( is_front_page() ) { 
				echo '';
			} else {
				wp_title('');
				echo " | ";
				bloginfo('name'); 
			} ?>
		</title>
		<meta name="description" content="">
		<meta name="author" content="Max Yeo">

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png">

		<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
		<meta property="og:url" content="<?php the_permalink(); ?>"/>
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>"/>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
		<meta property="og:description" content=""/>
		<?php wp_head(); ?>
	</head>

	<body>
		<header>

		</header>