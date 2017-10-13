<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="Michael Mullin, The Bard, Irish Poems, Irish Poets" />
	<meta name="description" content="Poems of Michael 'The Bard' Mullin" />
	<meta name="author" content="The Mullin Family, Aspire Digital, Sean Creagh" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body>
	<header>
		<div id="header_inner_container">
			<div id="site_logo_container"><?php if (is_active_sidebar('header_widget_1')) { dynamic_sidebar('header_widget_1'); } ?></div>

			<div id="site_title_container">
				<div id="title"><?php if (is_active_sidebar('header_widget_2')) { dynamic_sidebar('header_widget_2'); } else { $title = get_bloginfo('name', 'raw'); echo $title; } ?></div>
				<div id="subtitle"><?php if (is_active_sidebar('header_widget_3')) { dynamic_sidebar('header_widget_3'); } else { $subtitle = get_bloginfo('description', 'raw'); echo $subtitle; } ?></div>
			</div>

			<div id="site_navigation_container"><?php wp_nav_menu(array('theme_location' => 'primary_menu', 'container_class' => 'navigation')); ?></div>

			<div id="site_responsive_navigation">
				<?php if (is_active_sidebar('header_widget_4')) { dynamic_sidebar('header_widget_4'); } ?>
				<div id="site_responsive_dropdown"><?php wp_nav_menu(array('theme_location' => 'primary_menu', 'container_class' => 'navigation')); ?></div>
			</div>
		</div>
	</header>