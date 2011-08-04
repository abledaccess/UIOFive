<?php get_header(); ?>

			<div class="fl-container fl-container-flex fl-push">

				<section id="nav:content" class="content fl-col fl-container-flex70" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article class="page" id="post-<?php the_ID(); ?>">

						<header>
							<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Direct Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						</header>

						<section class="entry-content">

							<?php the_content(); ?>
							<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

						</section><!-- /.entry-content -->
						<footer class="entry-utility">

							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

						</footer><!-- /.entry-utility -->

					</article><!-- /#post-<?php the_ID(); ?> -->

					<?php endwhile; else: ?>

						<?php include (TEMPLATEPATH . '/inc/not-found.php' ); ?>

					<?php endif; ?>

				</section><!-- /#nav:content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>