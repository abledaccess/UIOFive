<!DOCTYPE html>

<html id="fssfive" class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

		<meta name="viewport" content="initial-scale=1.0, width=device-width" />

		<link rel="profile" href="http://gmpg.org/xfn/11" />

		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/fss-layout.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/fss-text.css" media="all" />

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />

		<title><?php bloginfo('name'); ?> <?php wp_title('&mdash; '); ?></title>

		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png"/>

		<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
			wp_head(); 
		?>

	</head>

	<body id="nav:page-top" <?php body_class(); ?>>

		<div id="wrapper" class="fl-container fl-centered">

			<header id="branding" class="header fl-container-flex" role="banner">
				<hgroup>
					<h1 id="site-title"><?php bloginfo('name'); ?></h1>
					<h2 id="site-description"><?php bloginfo('description'); ?></h2>
				</hgroup>

				<nav id="access" class="fl-container-flex" role="navigation">
					<?php wp_nav_menu(array("container" => "ul", "menu_class" => "fl-tabs fl-clearfix fl-tabs-left", "theme_location" => "main_nav")); ?>
				</nav><!-- /#access -->
			</header>
