<nav>
						<form id="search-form" method="get" action="<?php bloginfo('url'); ?>/">
							<label for="s">Search terms</label>
							<input id="s" name="s" value="<?php the_search_query(); ?>" type="text" />
							<input type="submit" class="btn" value="Find it!" />
						</form>
					</nav>