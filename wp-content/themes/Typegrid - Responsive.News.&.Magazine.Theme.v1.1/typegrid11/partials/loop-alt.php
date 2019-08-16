<div class="entry-list-standard">

	<?php while ( have_posts() ): the_post(); ?>
        <article id="entry-<?php the_ID(); ?>" <?php post_class( 'entry single group' ); ?>>

            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark"
                       title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h2><!--/.entry-title-->

				<?php if ( ! wpb_option( 'post-hide-comments' ) ): ?><a class="entry-comments"
                                                                        href="<?php comments_link(); ?>"><i
                            class="icon-comments-alt"></i><?php comments_number( '0', '1', '%' ); ?></a><?php endif; ?>

                <ul class="entry-meta group">
					<?php if ( ! wpb_option( 'post-hide-author' ) ): ?>
                        <li class="entry-author"><?php _e( 'by', 'typegrid' ); ?><?php the_author_posts_link(); ?></li><?php endif; ?>
					<?php if ( ! wpb_option( 'post-hide-categories' ) ): ?>
                        <li class="category"><?php _e( 'in', 'typegrid' ); ?><?php the_category( ' &middot; ' ); ?></li><?php endif; ?>
					<?php if ( ! wpb_option( 'post-hide-date' ) ): ?>
                        <li class="date">
                        &mdash; <?php the_time( 'j M, Y' ); ?><?php if ( ! wpb_option( 'post-hide-detailed-date' ) ): ?><?php _e( 'at', 'typegrid' ); ?><?php the_time( 'g:i a' ); ?><?php endif; ?></li><?php endif; ?>
                </ul>
                <div class="clear"></div>
            </header>

			<?php if ( ( wpb_option( 'blog-format' ) == '1' ) && get_post_format() ) {
				get_template_part( 'partials/post-formats' );
			} ?>

            <div class="entry-part text">
				<?php if ( ( wpb_option( 'blog-format' ) == '2' ) ): ?>
                    <div class="entry-thumbnail">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php if ( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail( 'size-thumbnail-medium' ); ?>
							<?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.png"
                                     alt="<?php the_title(); ?>"/>
							<?php endif; ?>
							<?php if ( has_post_format( 'video' ) ) {
								echo '<span class="thumb-icon"><i class="icon-play"></i></span>';
							} ?>
							<?php if ( has_post_format( 'audio' ) ) {
								echo '<span class="thumb-icon"><i class="icon-volume-up"></i></span>';
							} ?>
                        </a>
                    </div><!--/.entry-thumbnail-->
				<?php endif; ?>

				<?php
				if ( wpb_option( 'blog-standard-excerpt' ) ) {
					the_excerpt();
				} else {
					the_content();
				}
				?>
				<?php if ( wpb_option( 'excerpt-more-link-enable' ) ): ?>
                    <div class="more-link-wrap">
                        <a class="more-link" href="<?php the_permalink(); ?>">
                            <i class="icon-share-alt"></i><span><?php echo wpb_option( 'read-more', __( '(more...)', 'typegrid' ) ); ?></span>
                        </a>
                    </div>
				<?php endif; ?>
                <div class="clear"></div>
            </div>

        </article>
	<?php endwhile; ?>

</div><!--/.entry-list-standard-->

<?php get_template_part( 'partials/pagination' ); ?>
