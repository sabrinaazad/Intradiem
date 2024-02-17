<?php get_header(); ?>

<main class="main--single event">
    <section class="section section--single">
        <button type="button"class="btn-back" onclick="history.back();">« Back to All Events</button> 
        <div class="single">
        <h1 class="heading align--center"><?php the_title(); ?></h1>
            <?php while (have_posts()) : the_post(); ?>

                <div class="content">
                    <div class="image-wrapper"><?php the_post_thumbnail(); ?></div>
                    <div class="event-details">
                        <?php if( get_field('start_date')) : ?>
                            <div class="event-date"><b>Event Date:</b> <?php echo the_field('start_date'); ?> - <?php echo the_field('end_date'); ?></div>
                        <?php endif; ?>
                        <?php if( get_field('start_time')) : ?>
                            <div class="start-time"><b>Start Time:</b> <?php echo the_field('start_time'); ?></div>
                        <?php endif; ?>
                        <?php if( get_field('end_time')) : ?>
                            <div class="end-time"><b>End Time:</b> <?php echo the_field('end_time'); ?></div>
                        <?php endif; ?>
                        <?php if( get_field('location')) : ?>
                            <div class="locationn"><b>Location:</b> <?php echo the_field('location'); ?></div>
                        <?php endif; ?>
                        <?php if( get_field('online')) : ?>
                            <div class="online"><b>Virtual Link:</b> <a href="<?php echo the_field('online'); ?>" target="_blank"><?php echo the_field('online'); ?></a></div>
                        <?php endif; ?>
                        <?php if( get_field('host')) : ?>
                            <div class="host"><b>Host/Speaker:</b> <?php echo the_field('host'); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="blog-post">
                        <h4>About this event:</h4>
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
</main>

<?php get_footer(); ?>