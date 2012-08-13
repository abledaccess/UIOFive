<nav>
						<form id="search-form" method="get" action="<?php bloginfo('url'); ?>/">
							<label for="s" class="fl-hidden-accessible">Search this site</label>
							<input id="s" name="s" value="<?php the_search_query(); ?>" type="text" />
							<input type="submit" class="button" value="Find!" />
						</form>
					</nav>