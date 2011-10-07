<?php get_header(); ?>

		<div class="fl-container fl-container-flex fl-push">

			<section id="nav:content" class="content fl-col fl-container-flex75" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Direct Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
					</header>
					<section class="entry-content">

						<?php the_content('Continue reading "'.the_title('', '', false).'"...'); ?>

					</section><!-- /.entry-content -->
					<footer class="entry-utility">
						<p><?php the_tags('Tags: ', ', ', '<br>'); ?> Posted under <?php the_category(', '); ?> &mdash; <?php edit_post_link('Edit', '', ' &mdash; '); ?> <?php comments_popup_link('Comment on this post &hellip;', '1 comment on this post &hellip;', '% comments &hellip;'); ?></p>

					</footer><!-- /.entry-utility -->
				</article><!-- /#post-<?php the_ID(); ?> -->

				<?php endwhile; ?>

				<?php 
				$next_posts = get_next_posts_link('&laquo; Older articles');
				$prev_posts = get_previous_posts_link('Newer articles &raquo;');
				if( $next_posts || $prev_posts ) { ?><nav id="next-prev-links">
					<ul class="fl-container-flex">
						<?php if( $next_posts ) echo '<li class="alignleft">'.$next_posts.'</li>'; ?>

						<?php if( $prev_posts ) echo '<li class="alignright">'.$prev_posts.'</li>'; ?>

					</ul>
				</nav><!-- /#next-prev-links -->
				<?php } ?>

				<?php else : ?>

				<?php include (TEMPLATEPATH . '/inc/not-found.php' ); ?>

				<?php endif; ?>

			</section><!-- /#nav:content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>