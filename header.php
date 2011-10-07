<!DOCTYPE html>

<html id="fssfive" class="no-js" <?php language_attributes(); ?>>

<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

<meta name="viewport" content="initial-scale=1.0, width=device-width" />

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-layout.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-text.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-theme-bw-uio.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-theme-wb-uio.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-theme-by-uio.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-theme-yb-uio.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-text-uio.css" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/lib/jquery/ui/css/fl-theme-hc/hc.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/lib/jquery/ui/css/fl-theme-hci/hci.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/lib/jquery/ui/css/fl-theme-by/by.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/lib/jquery/ui/css/fl-theme-yb/yb.css" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/FatPanelUIOptions.css" />

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion/myInfusion.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>

<title> <?php if (function_exists('is_tag') && is_tag()) {
single_tag_title('Tag Archive for &quot;'); echo '&quot; &mdash; '; } elseif (is_archive()) {
wp_title(''); echo ' Archive &mdash; '; } elseif (is_search()) {
echo 'Search for &quot;'.wp_specialchars($s).'&quot; &mdash; '; } elseif (!(is_404()) && (is_single()) || (is_page())) {
wp_title(''); echo ' &mdash; '; } elseif (is_404()) {
echo 'Unable to be found... &mdash; ';
} if (is_home()) {
bloginfo('name'); echo ' &mdash; '; bloginfo('description'); } else {
bloginfo('name');
} if ($paged > 1) {
echo ' &mdash; Page '. $paged;
} ?> </title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />

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

  <div class="flc-uiOptions-fatPanel fl-uiOptions-fatPanel">
      <!-- This is the div that will contain the UI Options component -->
  	<div id="myUIOptions" class="flc-slidingPanel-panel flc-uiOptions-iframe"></div>     

      <!-- This div is for the sliding panel that shows and hides the UI Options controls -->
  	<div class="fl-panelBar">
  		<button class="flc-slidingPanel-toggleButton fl-toggleButton">Show display preferences</button>
  	</div>
  </div>	

  <!-- This is where the Table of Contents will be displayed -->
  <div class="flc-toc-tocContainer toc"> </div>

	<script type="text/javascript">
	    // Instantiate the UI Enhancer component, specifying the table of contents' template URL
	    fluid.pageEnhancer({
	        tocTemplate: "<?php bloginfo('template_url'); ?>/infusion/components/tableOfContents/html/TableOfContents.html",
	        classnameMap: {
	            theme: {
	                "default": "uio-demo-theme"
	            }
	        }
	    });
    
	    // Start up UI Options
	    fluid.uiOptions.fatPanel(".flc-uiOptions-fatPanel", {
	        prefix: "<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/html/"
	    });
	</script>

	<div id="wrapper" class="fl-container fl-centered">

		<header id="branding" class="header fl-container-flex" role="banner">
			<hgroup>
				<h1 id="site-title"><a href="/"><?php bloginfo('name'); ?></a></h1>
				<h2 id="site-description"><?php bloginfo('description'); ?></h2>
			</hgroup>

			<nav id="access" class="fl-container-flex" role="navigation">
				<?php wp_nav_menu(array(
					"container" => "ul", 
					"menu_class" => "fl-tabs fl-clearfix fl-tabs-left", 
					"theme_location" => "main_nav" )); ?>

			</nav><!-- /#access -->
		</header>
