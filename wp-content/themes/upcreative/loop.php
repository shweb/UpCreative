<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <div class="row about-history-copy" id="post-<?php the_ID(); ?>">

        <div class="col-md-2">
            <!-- post title -->
            <h2>
                <?php if (!is_post_type('about')) {
                    if (!is_post_type('service'))
                    {
                     ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    <?php
                    } else {
                        the_title();
                    }
                } else {
                    the_title();
                }
                ?>
            </h2>
            <!-- /post title -->
        </div>

        <div class="col-md-10" style="text-align:justify;">
            <?php html5wp_excerpt('html5wp_index'); ?>
        </div>
    </div>
    <div class="space"></div>

<?php endwhile; ?>

<?php else: ?>

    <div class="row about-history-copy" style="text-align: center">
        <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>
    </div>

<?php endif; ?>
