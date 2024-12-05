<?php
get_header();
?>
<main id="site-content" style="padding: 20px; max-width: 1200px; margin: 0 auto;">
    <h1 style="text-align: center; font-size: 2.5rem; margin-bottom: 30px;">Blog</h1>
    <?php if ( have_posts() ) : ?>
        <div class="post-list" style="display: flex; flex-wrap: wrap; gap: 20px;">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
                    style="flex: 1 1 calc(33.333% - 20px); box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden; background: #fff;">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail" style="height: 200px; overflow: hidden;">
                            <a href="<?php the_permalink(); ?>" style="display: block;">
                                <?php the_post_thumbnail('large', ['style' => 'width: 100%; height: auto;']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="post-content" style="padding: 15px;">
                        <h2 style="font-size: 1.5rem; margin-bottom: 10px;">
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #333;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <p style="color: #777; font-size: 0.9rem; margin-bottom: 15px;">
                            Published on <?php echo get_the_date(); ?>
                        </p>
                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" style="display: inline-block; margin-top: 10px; color: #0073aa; font-weight: bold; text-decoration: none;">
                            Read More &rarr;
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        <div class="pagination" style="margin-top: 30px; text-align: center;">
            <?php
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('&laquo; Previous', 'twentytwentyfour-child'),
                'next_text' => __('Next &raquo;', 'twentytwentyfour-child'),
                'screen_reader_text' => ' ',
            ));
            ?>
        </div>
    <?php else : ?>
        <p style="text-align: center; font-size: 1.2rem;">No posts found. Check back later!</p>
    <?php endif; ?>
</main>
<?php
get_footer();
