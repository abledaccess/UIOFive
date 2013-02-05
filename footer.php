
		</div><!-- /fSS5-content-container -->

		<footer class="fSS5-contentinfo fl-clearfix fl-push" role="contentinfo">

			<section class="fSS5-colophon" aria-labelledby="copyright-and-syndication">
				<ul id="copyright-and-syndication">
					<li><small>&copy; <?= date('Y'); ?> <?php bloginfo('name'); ?></small></li>
					<li><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to Posts Feed">Entries (<abbr title="Really Simple Syndication">RSS</abbr>)</a></li>
					<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="Subscribe to Comments Feed">Comments (<abbr title="Really Simple Syndication">RSS</abbr>)</a></li>
					<li><a href="<?php the_permalink() ?>#page-top" title="Return to the top of this page">Back to top</a></li>
				</ul>
			</section><!-- /fSS5-colophon -->

		<?php wp_footer(); ?>

		</footer><!-- /.fSS5-contentinfo -->

	</div><!-- /.fSS5-wrapper -->

</body>

</html>