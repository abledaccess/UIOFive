<?php get_header(); ?>

			<div class="fl-container fl-container-flex fl-push">

				<section id="nav:content" class="content fl-col fl-container-flex70" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article class="single" id="post-<?php the_ID(); ?>">
						<header>
							<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Direct Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
						</header>
						<section class="entry-content">

							<?php the_content(); ?>
							<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

						</section><!-- /.entry-content -->
						<footer class="entry-utility">
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

							<p>This article was posted on <time datetime="<?php the_time('Y-m-d') ?>" pubdate="pubdate" class="updated"><?php the_time('F jS, Y') ?></time> at <time><?php the_time(); ?></time> and was filed under <?php the_category(', ') ?>.</p>
							<p>You can follow any comments to this article above through the <?php post_comments_feed_link('RSS 2.0 Comments Feed'); ?>.
								<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
									// both comments and pings open ?>
							You can also <a href="#respond">leave a comment</a> of your own below, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
							<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
								// only pings are open ?>
								Comments are currently closed, but you can still <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
							<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								// comments are open, pings are not ?>
								Leave a comment. Pinging is currently not allowed.
							<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								// neither comments nor pings are open ?>
								Both comments and pings are currently closed.</p>
								<?php } edit_post_link('Edit this article','<p>','.</p>'); ?>

						</footer><!-- /.entry-utility -->
					</article><!-- /#post-<?php the_ID(); ?> -->

					<?php comments_template(); ?>

					<nav id="next-prev-links">
						<ul class="fl-container-flex">
							<li class="alignleft"><?php previous_post_link('&laquo; %link'); ?></li>
							<li class="alignright"><?php next_post_link('%link &raquo;'); ?></li>

						</ul> 
					</nav>

					<?php endwhile; else: ?>

						<?php include (TEMPLATEPATH . '/inc/not-found.php' ); ?>

					<?php endif; ?>

				</section><!-- /#nav:content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>