<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
		
</head>

<body <?php body_class(); ?>>
	<?php
		$header_bg_color = get_theme_mod( 'header_background_color', '#ffffff' );
		$header_logo = get_theme_mod( 'header_logo' );
		$header_title = get_theme_mod( 'header_title', get_bloginfo( 'name' ) );
		$header_font = get_theme_mod( 'header_font', 'Arial' );
		$header_text_color = get_theme_mod( 'header_text_color', '#000000' );
	?>
	<header style="background-color: <?php echo esc_attr( $header_bg_color ); ?>">
		<div class="header-container">
			<div class="logo">
				<a href="<?php echo esc_url( home_url() ); ?>">
					<?php if ( $header_logo ) : ?>
						<img class="logo-header" src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( $header_title ); ?>">
					<?php else : ?>
						<h1 class="site-title" style="font-family: <?php echo esc_attr( $header_font ); ?>; color: <?php echo esc_attr( $header_text_color ); ?>;"><?php echo esc_html( $header_title ); ?></h1>
					<?php endif; ?>
				</a>
			</div>
			<nav>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'container' => false,
						'menu_id' => 'header-menu'
					) );
				?>
			</nav>
			<div class="header-widgets">
				<?php if ( is_active_sidebar( 'header_widget_area' ) ) : ?>
					<?php dynamic_sidebar( 'header_widget_area' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</header>