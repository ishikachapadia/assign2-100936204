<?php
get_header(); // Include the header.php file
?>

<main id="site-content" style="max-width: 800px; margin: 0 auto; padding: 20px;">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-color: #fff; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-radius: 8px;">
                <!-- Post Header -->
                <header class="post-header" style="margin-bottom: 30px;">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail" style="height: 300px; overflow: hidden; margin-bottom: 20px;">
                            <?php the_post_thumbnail('large', ['style' => 'width: 100%; height: auto;']); ?>
                        </div>
                    <?php endif; ?>
                    
                    <h1 style="font-size: 2rem; font-weight: bold; margin-bottom: 10px;"><?php the_title(); ?></h1>
                    <p style="font-size: 1rem; color: #777; margin-bottom: 20px;">
                        Published on <?php echo get_the_date(); ?> | By <?php the_author(); ?>
                    </p>
                </header>

                <!-- Post Content -->
                <div class="post-content" style="font-size: 1rem; color: #333;">
                    <?php the_content(); ?>
                </div>
                
                <!-- Post Footer -->
                <footer class="post-footer" style="margin-top: 30px; text-align: center;">
                    <div class="post-tags">
                        <?php the_tags('<span class="tags-title">Tags: </span>', ', ', ''); ?>
                    </div>
                    <div class="post-navigation" style="margin-top: 20px;">
                        <?php
                            // Display next and previous post navigation
                            previous_post_link('<span class="prev-link">%link</span>');
                            next_post_link('<span class="next-link">%link</span>');
                        ?>
                    </div>
                </footer>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</main>

<?php
get_footer(); // Include the footer.php file
?>
