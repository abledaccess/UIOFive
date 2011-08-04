			<?php // Do not delete these lines
				if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
					die ('Please do not load this page directly. Thanks!');
				if (!empty($post->post_password)) {
					if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { ?>
						<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
						<?php return;
					}
				}
				$oddcomment = 'class="alt" '; // alternating comments
			?>

			<?php if ($comments) : // there are comments ?>

					<section id="comments">
						<h3><?php comments_number('No Comments', 'One Comment', '% Comments' ); ?> to &ldquo;<?php the_title(); ?>&rdquo;</h3>

						<?php foreach ($comments as $comment) : ?>

						<div <?php echo $oddcomment; ?>id="comment-<?php comment_ID(); ?>">
							<header>
								<h4><?php echo get_avatar( $comment, 32 ); ?> <cite><?php comment_author_link(); ?></cite> &mdash; <a href="#comment-<?php comment_ID(); ?>" title="Directlink for this comment"><time datetime="<?php the_time('Y-m-d') ?>" pubdate="pubdate"><?php comment_date('F jS, Y'); ?></time> at time><?php comment_time(); ?></time></a> <?php edit_comment_link('Edit',' &mdash; ',''); ?></h4>
								<?php if ($comment->comment_approved == '0') : ?>
									<p>Your comment is awaiting moderation.</p>
								<?php endif; ?>
							</header>
							<section>
								<?php comment_text(); ?>
							</section>
						</div>

						<?php $oddcomment = (empty($oddcomment)) ? 'class="alt" ' : ''; // alternating comments ?>
						<?php endforeach; ?>

					</section><!-- /#comments -->

			<?php else : // no comments yet ?>

				<?php if ('open' == $post->comment_status) : ?>
					<!-- [comments are open, but there are no comments] -->

				 <?php else : ?>
					<!-- [comments are closed, and no comments] -->
					<div id="comments-closed">
						<h2>Comments are closed</h2>
						<p>Time for comment has come and gone.</p>
					</div><!-- /#comments-closed -->

				<?php endif; ?>
			<?php endif; ?>

			<?php if ('open' == $post->comment_status) : ?>

					<section id="respond">
						<h3>Leave a Comment</h3>

						<?php if (get_option('comment_registration') && !$user_ID) : ?>
						<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
						<?php else : ?>

						<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

							<?php if ($user_ID) : ?>
<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><span class"fn"><?php echo $user_identity; ?></span></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
							<?php else : ?>

							<div class="commenter-info">
								<label for="author">Your name <?php if ($req) echo "(required)"; ?></label>
								<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="55" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?>>
							</div><!-- /.commenter-info -->

							<div class="commenter-info">
								<label for="email">Your email (will not be published) <?php if ($req) echo "(required)"; ?></label>
								<input type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="55" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?>>
							</div><!-- /.commenter-info -->

							<div class="commenter-info">
								<label for="url">Your website</label>
								<input type="url" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="55" tabindex="3">
							</div><!-- /.commenter-info -->

							<?php endif; ?>

							<!-- p>Allowed <abbr title="HyperText Markup Language">HTML:</abbr> tags: <code><?php echo allowed_tags(); ?></code></p -->
							<div id="commenter-comment">
								<label for="comment">Your comment</label>
								<textarea name="comment" id="comment" cols="55" rows="10" tabindex="4"></textarea>

							</div><!-- /#commenter-comment -->

							<input name="submit" type="submit" id="comment-submit" tabindex="5" value="Submit it!">
							<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>">
							<?php do_action('comment_form', $post->ID); ?>

						</form>
						<?php endif; ?>

					</section>
			<?php endif; ?>