<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UIO5
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'UIO5' ); ?></a>

		<script type="text/javascript">
			$(document).ready(function () {
				fluid.uiOptions.prefsEditor(".flc-prefsEditor-separatedPanel", {
					terms: {
						"templatePrefix": "<?php bloginfo( 'template_url' ); ?>/infusion/src/framework/preferences/html",
						"messagePrefix": "<?php bloginfo( 'template_url' ); ?>/infusion/src/framework/preferences/messages"
					},
						"tocTemplate": "<?php bloginfo( 'template_url' ); ?>/infusion/src/components/tableOfContents/html/TableOfContents.html",
						"ignoreForToC": {
						"overviewPanel": ".flc-overviewPanel"
					}
				});
			})
		</script>

		<div class="flc-prefsEditor-separatedPanel fl-prefsEditor-separatedPanel">
		<!-- This is the div that will contain the Preference Editor component -->
			<div class="flc-slidingPanel-panel flc-prefsEditor-iframe"></div>
			<!-- This div is for the sliding panel that shows and hides the Preference Editor controls -->
			<div class="fl-panelBar">
				<span class="fl-prefsEditor-buttons">
					<button id="reset" class="flc-prefsEditor-reset fl-prefsEditor-reset"><span class="fl-icon-undo"></span> Reset</button>
					<button id="show-hide" class="flc-slidingPanel-toggleButton fl-prefsEditor-showHide"> Show/Hide</button>
				</span>
			</div>
		</div>

		<div class="flc-toc-tocContainer"> </div>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'UIO5' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
