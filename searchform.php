<nav>
						<form id="site-search" method="get" action="<?php bloginfo('url'); ?>/">
							<label for="s" class="fl-hidden-replace">Search the site: </label>
							<input type="search" id="s" name="s" value="<?php the_search_query(); ?>">
							<input type="submit" value="Find it!">
						</form>
					</nav><!-- /#site-search -->