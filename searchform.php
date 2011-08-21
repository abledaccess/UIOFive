<nav>
						<form id="search-form" method="get" action="<?php bloginfo('url'); ?>/">
							<fieldset>
								<legend class="access">Search our blog archives</legend>
								<label for="s" class="access">Search terms</label>
								<input id="s" name="s" value="<?php the_search_query(); ?>" type="text" placeholder="Search&hellip;" />
								<input id="btn" type="image" src="<?php bloginfo('template_url'); ?>/images/search.png" alt="Search" />
							</fieldset>
						</form>
					</nav>