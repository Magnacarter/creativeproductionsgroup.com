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

			<nav>
				<?php wp_nav_menu( array( 'menu' => 'main-nav' ) ); ?>
			</nav>

		<?php else : ?>

			<nav>
				<?php wp_nav_menu( array( 'menu' => 'hamburger-nav' ) ); ?>
			</nav>

		<?php endif ?>

			<div class="grid-container hamburger_nav">
				<div class="hamburger grid-20">
					<a href=""><img height="80" width="80" src="<?php echo bloginfo( 'stylesheet_directory' ) . '/img/hamburger.png' ?>"></a></img>
				</div>
				<div class="toggle_menu">
					<?php wp_nav_menu( array( 'menu' => 'hamburger-nav' ) ); ?>
				</div>
			</div>








