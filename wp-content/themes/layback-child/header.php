<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php do_action('lb_after_body_tag'); ?>

	<div id="header" class="site-header">
		<a class="site-logo" href="<?php echo esc_url( home_url() ); ?>">
			<?php 				
				if(get_theme_mod('company'))
				{
					echo '<h1>' . get_theme_mod('company') . '</h1>';
				}
				else
				{
					echo '<h1>Astoya</h1>';
				}
			?>
		</a>
		<div class="est">est. 2018</div>
	</div>