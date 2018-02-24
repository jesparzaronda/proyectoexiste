<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Melissa
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('posts-list__item card'); ?>>

    <?php $utility = melissa_utility()->utility; ?>

    <figure class="post-thumbnail">
        <?php melissa_post_formats_gallery(); ?>

        <?php melissa_sticky_label(); ?>
    </figure><!-- .post-thumbnail -->

    <div class="post-list__item-content">

        <header class="entry-header">

            <?php
            $title_html = (is_single()) ? '<h1 %1$s>%4$s</h1>' : '<h6 %1$s><a href="%2$s" rel="bookmark">%4$s</a></h6>';

            $utility->attributes->get_title(array(
                'class' => 'entry-title',
                'html' => $title_html,
                'echo' => true,
            ));
            ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php $blog_content = get_theme_mod('blog_posts_content', melissa_theme()->customizer->get_default('blog_posts_content'));
            $length = ('full' === $blog_content) ? 0 : 18;

            $utility->attributes->get_content(array(
                'length' => $length,
                'content_type' => 'post_excerpt',
                'echo' => true,
            ));
            ?>
        </div><!-- .entry-content -->

        <?php if ('post' === get_post_type()) : ?>

            <div class="entry-meta">


                <?php $author_visible = melissa_is_meta_visible('blog_post_author', 'loop') ? 'true' : 'false'; ?>

                <?php $utility->meta_data->get_author(array(
                    'visible' => $author_visible,
                    'class' => 'posted-by__author',
                    'prefix' => esc_html__('By ', 'melissa'),
                    'html' => ' <span class="post__author"><span class="posted-by">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></span></span>',
                    'echo' => true,
                ));
                ?>

                <span class="post__date">
					<?php $date_visible = melissa_is_meta_visible('blog_post_publish_date', 'loop') ? 'true' : 'false';

                    $utility->meta_data->get_date(array(
                        'visible' => $date_visible,
                        'class' => 'post__date-link',
                        'icon' => '',
                        'echo' => true,
                    ));
                    ?>
				</span>
				<span class="post__comments">
					<?php $comment_visible = melissa_is_meta_visible('blog_post_comments', 'loop') ? 'true' : 'false';

                    $utility->meta_data->get_comment_count(array(
                        'visible' => $comment_visible,
                        'class' => 'post__comments-link',
                        'icon' => '',
                        'echo' => true,
                        'sufix' => _n_noop('%s Comment', '%s Comments', 'melissa'),
                    ));
                    ?>
				</span>

            </div><!-- .entry-meta -->

            <?php $tags_visible = melissa_is_meta_visible('blog_post_tags', 'loop') ? 'true' : 'false';

            $utility->meta_data->get_terms(array(
                'visible' => $tags_visible,
                'type' => 'post_tag',
                'delimiter' => ', ',
                'icon' => '',
                'before' => '<div class="post__tags">',
                'after' => '</div>',
                'echo' => true,
            ));
            ?>

            <?php melissa_share_buttons('loop'); ?>

        <?php endif; ?>

    </div><!-- .post-list__item-content -->

    <footer class="entry-footer">

        <?php $cats_visible = melissa_is_meta_visible('blog_post_categories', 'loop') ? 'true' : 'false'; ?>

        <?php $utility->meta_data->get_terms(array(
            'visible' => $cats_visible,
            'type' => 'category',
            'icon' => '',
            'before' => '<div class="post__cats">',
            'after' => '</div>',
            'echo' => true,
        ));
        ?>
        <?php $utility->attributes->get_button(array(
            'class' => 'btn btn-primary',
            'text' => get_theme_mod('blog_read_more_text', melissa_theme()->customizer->get_default('blog_read_more_text')),
            'icon' => '',
            'html' => '<a href="%1$s" %3$s><span class="btn__text">%4$s</span>%5$s</a>',
            'echo' => true,
        ));
        ?>
    </footer><!-- .entry-footer -->

</article><!-- #post-## -->
