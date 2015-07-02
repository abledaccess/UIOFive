# UIOFive

An accessibility-ready starter WordPress theme employing [The Fluid Project](http://fluidproject.org/)'s UIO.

## About

UIOFive (formally FSSFive) is a [WorPress starter theme based on `_s` -- or `underscores`](http://underscores.me/). It's an accessiblity-ready WordPress blogging theme from which to start developing your new theme from. Plus it makes use of components of The Fluid Project's Infusion framework, User Interface Options (UIOptions) specifically.

Why the rebranding? Well, as of the release of Infusion 1.5, Fluid Skinning System (FSS) has been depreciated from Infusion. "[There are no CSS Framework requirements for working with Infusion. Infusion's strategy going forward will be to use custom CSS for component specific styling](http://docs.fluidproject.org/infusion/development/DeprecationsIn1_5.html)." 

That said, technically, I'm not responsible for too much of what this theme is. I essentially, and with what is more than likely an element of irresponsibly (but with more responsibility than previous iterations of this theme), stitched it together from contributions of other people who are much smarter than I. However, I accept complete responsibility for any sloppiness I caused, and I'd love the opportunity to correct any mistakes should you find any. Please, let me know.

## What's in the box?

As of this moment, UIOFive is not equipped with Infusion or UIOptions -- inclusion of both are on a very short list of things I must do first, rather obviously. And [what follows was largely grabbed directly from the underscores README on its Github repository](https://github.com/Automattic/_s/blob/master/README.md):

* Just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A sample custom header implementation in `inc/custom-header.php` that can be activated by uncommenting one line in `functions.php` and adding the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/extras.php` that can improve your theming experience.
* A script at `js/libs/navigation.js`, which is includeed in the minified `js/build/global.min.js` script, that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. The global  script is enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Sass capable, as the option to "_sassify" was provided in the "Advanced Options" when initially generating the original underscores theme. And I chose it.
* Grunt capable, and currently managing Sass and Javascript related assets.
* Licensed under GPLv2 or later. :) Use it to make something cool.
* More to follow.