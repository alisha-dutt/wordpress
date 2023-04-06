<?php
/**
 * The Header
 * This is the template that displays the <head> section 
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo(show: 'charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<!-- add our custom css file -->
	<link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/assignmentone/assets/css/custom.css')); ?>">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- add our custom font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
	<header>
		<div>
			<a href="<?php echo esc_url(home_url()); ?>">
				<img src="<?php echo esc_url(home_url('wp-content/uploads/2023/02/travel-logo.jpg')); ?>" alt="header logo">
			</a>
		</div>
		<nav>
			<?php
			wp_nav_menu(
				array(
					'menu' => 'main',
					'theme_location' => '',
					'depth' => 2,
					'fallback_cb' => false
				)
			);
			?>
		</nav>
	</header>