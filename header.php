<!DOCTYPE html>

<html id="fssfive" class="no-js" <?php language_attributes(); ?>>

<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

<link rel="profile" href="http://gmpg.org/xfn/11" />

<?php if(is_home() && (!$paged || $paged == 1) || is_single() || is_page()) { ?>
<meta name="googlebot" content="index,archive,follow,noodp" />
<meta name="robots" content="all,index,follow" />
<meta name="msnbot" content="all,index,follow" />
<?php } else { ?>
<meta name="googlebot" content="noindex,noarchive,follow,noodp" />
<meta name="robots" content="noindex,follow" />
<meta name="msnbot" content="noindex,follow" />
<?php } ?>

<meta name="viewport" content="initial-scale=1.0, width=device-width" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/fss-layout.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/fss-text.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>

<title><?php if (function_exists('is_tag') && is_tag()) { single_tag_title("Tag Archive for &quot;"); echo'&quot; &mdash; '; } elseif (is_archive()) { wp_title(''); echo ' Archive &mdash; '; } elseif (is_search()) { echo 'Search for &quot;'.esc_html($s).'&quot; &mdash; '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' &mdash; '; } elseif (is_404()) { echo 'Not Found &mdash; '; } if (is_home()) { bloginfo('name'); echo ' &mdash; '; bloginfo('description'); } else { bloginfo('name'); } ?><?php if ($paged>1) { echo ' &mdash; page '. $paged; } ?></title>

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
				<h1 id="site-title"><a href="/"><?php bloginfo('name'); ?></a></h1>
				<h2 id="site-description"><?php bloginfo('description'); ?></h2>
			</hgroup>

			<nav id="access" class="fl-container-flex" role="navigation">
				<?php wp_nav_menu(array(
					"container" => "ul", 
					"menu_class" => "fl-tabs fl-tabs-left", 
					"theme_location" => "main_nav" )); ?>

			</nav><!-- /#access -->
		</header>
