<?php get_header(); ?>
    <section class="section section--hero_banner full-width">
        <div class="section-wrapper">
            <h1 class="heading align--center"><?php the_title(); ?></h1>
        </div>
    </section>

<main class="single-template">
    <section class="section section--single">
        <button type="button"class="btn-back" onclick="history.back();">« Back to All Blogs</button> 
        <div class="single">
        <h1 class="heading align--center"><?php the_title(); ?></h1>
            <?php while (have_posts()) : the_post(); ?>

                <div class="content">
                    <div class="image"><img src="<?php the_post_thumbnail_url() ?>" alt="blog feature image" /></div>
                    <div class="date"><span>Published:&nbsp;</span> <?php echo get_the_date(); ?></div>
                    <div class="category">Categories: <?php echo the_category(); ?></div>
                    <div class="blog-post">

                        <?php the_content(); ?>
                    </div>
                </div>

                <nav id="nav-posts">
                    <div class="next"><?php next_post_link('%link', 'NEXT POST<br>&laquo; %title', false); ?></div>
                    <div class="prev"><?php previous_post_link('%link', 'PREVIOUS POST<br>%title &raquo;', false); ?></div>
                </nav>

            <?php endwhile; ?>

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