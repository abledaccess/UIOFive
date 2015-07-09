# UIOFive

A WordPress starter theme employing The Fluid Project's UIO.

## About

`UIOFive` (formally `FSSFive`) is a [WorPress starter theme based on `underscores` -- or `_s`](http://underscores.me/). Plus it makes use of components of [The Fluid Project](http://fluidproject.org/)'s Infusion framework, User Interface Options (`UIOptions`) specifically.

Why the rebranding? Well, as of the release of Infusion 1.5, Fluid Skinning System (`FSS`) has been depreciated from Infusion. "[There are no CSS Framework requirements for working with Infusion. Infusion's strategy going forward will be to use custom CSS for component specific styling](http://docs.fluidproject.org/infusion/development/DeprecationsIn1_5.html)." 

That said, technically, I'm not responsible for too much of what this theme is. I essentially, and with what is more than likely an element of irresponsibly (but with more responsibility than previous iterations of this theme), stitched it together from contributions of other people who are much smarter than I. However, I accept complete responsibility for any sloppiness I may have caused. And I'd love the opportunity to correct any mistakes should you find any. Please let me know.

## What's Provided?

As stated earlier, the difference betweeen `UIOFive` and the standard `underscores` theme is the addition of `UIOptions`. `UIOptions` gives individual users the ability to alter the presentation of a webpage it is deployed on to meet their needs. [See the User Interface Option tutorial on how to use it on your project for more information](http://docs.fluidproject.org/infusion/development/tutorial-userInterfaceOptions/UserInterfaceOptions.html). And [what follows was largely grabbed directly from the `underscores` README on its Github repository](https://github.com/Automattic/_s/blob/master/README.md). 

* Just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A sample custom header implementation in `inc/custom-header.php` that can be activated by uncommenting one line in `functions.php` and adding the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/extras.php` that can improve your theming experience.
* A script at `js/libs/navigation.js`, which is includeed in the minified `js/build/global.min.js` script, that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. The global  script is enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
* The option to "_sassify" was provided in the "Advanced Options" when initially generating the original `underscores` theme, meaning `UIOFive` is Sass capable, thereby providing smartly organized modules of styles. You'll find all the raw Sass files in the `sass` directory, they will help you to quickly get your design off the ground. 
* Grunt capable, and currently managing Sass and Javascript related assets.
* Licensed under GPLv2 or later. :) Use it to make something cool.