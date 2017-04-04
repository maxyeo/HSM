<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width">

		<title>
			<?php 
			if ( is_front_page() ) { 
				echo 'Hopkins Student Movers | Johns Hopkins Dorm Room Moving & Summer Storage';
			} else {
				wp_title('');
				echo " | ";
				bloginfo('name'); 
			} ?>
		</title>
		<meta name="description" content="">
		<meta name="author" content="Max Yeo">

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/bluejay.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/bluejay.png">

		<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
		<meta property="og:url" content="<?php the_permalink(); ?>"/>
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/fb_splash.jpg"/>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
		<meta property="og:description" content=""/>
		<?php wp_head(); ?>
	</head>

	<body>
		<?php 
		if ( is_front_page() ) { 
			echo '<header class="home cf">';
		} else {
			echo '<header class="cf">
				<div class="grid">';
		} ?>
			<div id="top"></div>
	        <div id="banner"></div>
	        <?php 
			if ( is_front_page() ) { 
				echo '<div id="markers"></div>
	       	 		<a href="https://booknow.appointment-plus.com/419hy0x2/" class="book-now"></a>';
			}?>
	        <nav>
	            <!-- <li><a href="index.html">Home</a></li>
	            <li><a href="moving.html">Moving</a></li>
	            <li><a href="storage.html">Storage</a></li>
	            <li><a href="employment.html">Employment</a></li>
	            <li><a href="contact.html">Contact</a></li> -->
	            <?php 
					$args = array(
					'theme_location' => 'primary nav',
					'container' => '',
					'items_wrap' => '%3$s'
				);
				?>
				<?php wp_nav_menu( $args ); ?>
	        </nav>
	        <?php 
			if ( is_front_page() ) { 
				echo '';
			} else {
				echo '</div>';
			} ?>
		</header>