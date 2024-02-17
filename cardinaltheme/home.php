<?php get_header(); ?>

<section class="section section--hero_banner full-width">
    <div class="section-wrapper">
        <h1 class="heading align--center">Blogs</h1>
    </div>
</section>

<main class="archive-template">
    <section class="section section--archive">
        <div class="post-grid">
        
            <?php
            // Check if there are any posts to display
            if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <a class="post" href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) { ?>
                            <div style="background-image: url(<?php the_post_thumbnail_url() ?>)" class="image-wrapper"></div>
                        <?php } else { ?>
                            <div class="image-wrapper"></div>
                        <?php } ?>
                        <div class="content">
                            <div class="date">
                                <span class="day"><?php echo get_the_date('j'); ?></span>
                                <span class="month uppercase"><?php echo get_the_date('M'); ?></span>
                            </div>
                            <div class="text">
                                <h4><?php the_title(); ?></h4>
                                <div class="author"><?php echo get_the_author(); ?></div>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </a>

                <?php endwhile; 
            
            else : ?>
                <p>Sorry, no posts matched your criteria.</p>

            <?php endif; ?>

            <?php if ($paged > 1) { ?>

                <nav id="nav-posts">
                    <div class="next"><?php previous_posts_link('« Newer Posts'); ?></div>
                    <div class="prev"><?php next_posts_link('Older Posts »'); ?></div>
                </nav>

            <?php } else { ?>

                <nav id="nav-posts">
                    <div class="prev"><?php next_posts_link('Older Posts »'); ?></div>
                </nav>

            <?php } ?>

            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <section class="section section--aside">

        <?php if (is_active_sidebar('blog-sidebar')) : ?>
            <?php dynamic_sidebar('blog-sidebar'); ?>
        <?php else : ?>
            <!-- Time to add some widgets! -->
        <?php endif; ?>

    </section>
</main>

<?php get_footer(); ?>