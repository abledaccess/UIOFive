<?php get_header(); ?>

		<div id="content-container" class="fl-clearfix fl-container fl-container-flex fl-push">

			<section id="nav:content" class="fSS5-main fl-clearfix fl-col fl-container-flex75" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header>
						<h1 class="entry-title"><?php the_title(); ?></h1>
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

				<?php endif; ?>

			</section><!-- /.fSS5-main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>