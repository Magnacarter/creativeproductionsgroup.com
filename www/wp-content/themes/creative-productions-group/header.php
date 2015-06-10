<!DOCTYPE html>
<html <?php language_attributes() ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ) ?>">
		<title><?php wp_title( '-', true, 'right' ); bloginfo( 'name' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<?php wp_head() ?>
	</head>
	<body <?php body_class() ?>>

			<div class="header_logo">
				<a href="<?php echo get_home_url() ?>"><img src="<?php the_field( 'nav_logo', 'options' ) ?>" height="40" width="400"/></a>
			</div>

		<?php if( is_front_page() ) : ?>

			<nav class="main-nav">
				<?php wp_nav_menu( array( 'menu' => 'main-nav' ) ); ?>
			</nav>

		<?php else : ?>

			<nav class="main-nav">
				<?php wp_nav_menu( array( 'menu' => 'hamburger-nav' ) ); ?>
			</nav>

		<?php endif ?>

			<div class="hamburger">
				<a href="" class="toggle-menu menu-left push-body"><img height="40" width="40" src="<?php the_field( 'hamburger_icon', 'options' ) ?>"></a></img>
			</div>

			<nav class="mobile-nav cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
				<?php wp_nav_menu( array( 'menu' => 'push-nav' ) ); ?>
			</nav>










