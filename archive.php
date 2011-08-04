<?php get_header(); ?>

			<div class="fl-container fl-container-flex fl-push">

				<section id="nav:content" class="content fl-col fl-container-flex70" role="main">

				<?php if (have_posts()) : ?>

					<?php $post = $posts[0]; // hack: set $post so that the_date() works ?>
					<?php if (is_category()) { ?>
					<h2>Archive for the &quot;<?php single_cat_title(); ?>&quot; Category</h2>

					<?php } elseif(is_tag()) { ?>
					<h2>Posts Tagged &quot;<?php single_tag_title(); ?>&quot;</h2>

					<?php } elseif (is_day()) { ?>
					<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

					<?php } elseif (is_month()) { ?>
					<h2>Archive for <?php the_time('F, Y'); ?></h2>

					<?php } elseif (is_year()) { ?>
					<h2>Archive for <?php the_time('Y'); ?></h2>

					<?php } elseif (is_author()) { ?>
					<h2>Author Archive</h2>

					<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<h2>Blog Archives</h2>

				<?php } ?>
				<?php while (have_posts()) : the_post(); ?>

					<article class="archive" id="post-<?php the_ID(); ?>">
						<header>
							<h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Direct Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<p class="entry-meta">Posted <time datetime="<?php the_time('Y-m-d') ?>" pubdate="pubdate"><?php the_time('F jS, Y') ?></time> by <?php the_author(); ?></p>
						</header>
						<section class="entry-content">
							<?php the_excerpt(); ?>
						</section><!-- /.entry-content -->
						<footer class="entry-utility">
							<p><?php the_tags('Tags: ', ', ', '<br>'); ?> Posted under <?php the_category(', '); ?> &mdash; <?php edit_post_link('Edit', '', ' &mdash; '); ?> <?php comments_popup_link('Respond to this post &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?></p>
						</footer><!-- /.entry-utility -->
					</article><!-- /#post-<?php the_ID(); ?> -->

					<?php endwhile; ?>

					<?php include (TEMPLATEPATH . '/inc/posts-nav.php' ); ?>

					<?php else : ?>

					<?php include (TEMPLATEPATH . '/inc/not-found.php' ); ?>

					<?php endif; ?>

				</section><!-- /#nav:content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>