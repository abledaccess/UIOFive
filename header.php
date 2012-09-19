<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

<link rel="profile" href="http://gmpg.org/xfn/11" />

<title>
	<?php if (function_exists('is_tag') && is_tag()) {
			single_tag_title('Tag Archive for &quot;'); echo '&quot; &mdash; ';
		} elseif (is_archive()) {
			wp_title(''); echo ' Archive &mdash; ';
		} elseif (is_search()) {
			echo 'Search for &quot;'.wp_specialchars($s).'&quot; &mdash; ';
		} elseif (!(is_404()) && (is_single()) || (is_page())) {
			wp_title(''); echo ' &mdash; ';
		} elseif (is_404()) {
			echo '404 Error &mdash; Page not found &mdash; ';
		}
		if (is_home()) {
			bloginfo('name'); echo ' &mdash; '; bloginfo('description');
		} else {
			bloginfo('name');
		}
		if ($paged > 1) {
			echo ' &mdash; Page '. $paged;
		} ?>
</title>
<base href="<?php echo esc_url(get_home_url()); ?>" />

<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<?php $template_url = get_bloginfo( 'template_url', 'display' ); ?>

<link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/infusion/framework/fss/css/fss-reset-global.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/infusion/framework/fss/css/fss-layout.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/infusion/framework/fss/css/fss-text.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/infusion/components/uiOptions/css/fss/fss-theme-bw-uio.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/infusion/components/uiOptions/css/fss/fss-theme-wb-uio.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/infusion/components/uiOptions/css/fss/fss-theme-by-uio.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/infusion/components/uiOptions/css/fss/fss-theme-yb-uio.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/infusion/components/uiOptions/css/fss/fss-text-uio.css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/infusion/lib/jquery/ui/css/fl-theme-hc/hc.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/infusion/lib/jquery/ui/css/fl-theme-hci/hci.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/infusion/lib/jquery/ui/css/fl-theme-by/by.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/infusion/lib/jquery/ui/css/fl-theme-yb/yb.css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/infusion/components/uiOptions/css/FatPanelUIOptions.css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />

<script src="<?php echo $template_url; ?>/infusion/MyInfusion.js"></script>
<script src="<?php echo $template_url; ?>/js/modernizr.js"></script>

<script>
 $(function() {
     $("<select />").appendTo(".fSS5-access");
     
     // Create default option "Navigation Menu..."
     $("<option />", {
        "selected": "selected",
        "value"   : "",
        "text"    : "Navigation Menu..."
     }).appendTo(".fSS5-access select");
     
     // Populate dropdown with menu items
     $(".fSS5-access a").each(function() {
      var el = $(this);
      $("<option />", {
          "value"   : el.attr("href"),
          "text"    : el.text()
      }).appendTo(".fSS5-access select");
     });
     
     $(".fSS5-access select").change(function() {
       window.location = $(this).find("option:selected").val();
     });
 
 });
</script>

<link rel="shortcut icon" href="<?php echo $template_url; ?>/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?php echo $template_url; ?>/apple-touch-icon.png"/>
		
<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
	wp_head(); 
?>

</head>

<body id="page-top" <?php body_class('fSS5-theme'); ?>>

	<nav class="fSS5-skip-links" aria-labelledby="skip-to-main-content">
		<a id="skip-to-main-content" href="<?php the_permalink() ?>#main">Skip to the main content</a>
	</nav><!-- /.fSS5-skip-links -->

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
	        tocTemplate: "<?php echo $template_url; ?>/infusion/components/tableOfContents/html/TableOfContents.html",
	        classnameMap: {
	            theme: {
	                "default": "uio-demo-theme"
	            }
	        }
	    });
    
	    // Start up UI Options
	    fluid.uiOptions.fatPanel(".flc-uiOptions-fatPanel", {
	        prefix: "<?php echo $template_url; ?>/infusion/components/uiOptions/html/"
	    });
	</script>

	<div class="fSS5-wrapper fl-container fl-centered">

		<header class="fSS5-banner fl-container-flex" role="banner">
			<section class="fSS5-branding">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>

				<<?php echo $heading_tag; ?> class="site-title alpha"><a href="<?php echo esc_url(get_home_url()); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> &mdash; Home" rel="home"><?php bloginfo( 'name' ); ?></a></<?php echo $heading_tag; ?>>
				<p class="site-description fSS5-screen-reader-text"><?php bloginfo('description'); ?></p>
			</section><!-- /.fSS5-branding -->

			<nav class="fSS5-access fl-container-flex fl-clearfix" role="navigation" aria-labelledby="main-menu-navigation">
				<?php wp_nav_menu(array(
					"container" => "ul",
					"menu_class" => "fl-tabs fl-tabs-left", 
					"menu_id" => "main-menu-navigation", 
					"theme_location" => "main_nav" )); ?>

			</nav><!-- /.fSS5-access -->
		</header><!-- /.fSS5-banner -->

		<div class="fSS5-content-container fl-clearfix fl-container fl-container-flex fl-push">