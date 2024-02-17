<section class="section section--team-members">
    <div class="heading-wrapper">
    <?php $subheading = get_sub_field('subheading');
    if ($subheading) : ?>
        <div class="subheading"><?php echo $subheading; ?></div>
    <?php endif; ?>

    <?php $heading = get_sub_field('heading');
    if ($heading) : ?>
        <h2 class="heading"><?php echo $heading; ?></h2>
    <?php endif; ?>

    <?php $blurb = get_sub_field('blurb');
    if ($blurb) : ?>
        <?php echo $blurb; ?>
    <?php endif; ?>
    </div>
    <div class="team-grid">
        <?php
        $args = array(
            'post_type' => 'team-members',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order'   => 'ASC',
            'posts_per_page' => -1
        );

        $loop = new WP_Query($args);
        ?>
        <?php if ($loop->have_posts()) : ?>
            <div class="team-slider-2">

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="slide">
                        <div class="image-wrapper"><?php the_post_thumbnail(); ?></div>
                    </div>

                <?php endwhile; ?>

            </div>
        <?php else : ?>

            <p>Sorry, no posts exist.</p>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <?php
        $args = array(
            'post_type' => 'team-members',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order'   => 'ASC',
            'posts_per_page' => -1
        );

        $loop = new WP_Query($args);
        ?>
        <?php if ($loop->have_posts()) : ?>
            <div class="team-slider">
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="slide">
                        <div class="image-wrapper"><div class="box-one"></div><div class="box-two"></div><?php the_post_thumbnail(); ?></div>
                        <div class="content">
                            <h3 class="heading"><?php echo the_title(); ?></h3>
                            <div class="title"><?php echo the_field("title"); ?></div>
                            <?php echo the_content(); ?>
                            <!-- <a class="btn btn-secondary" href="<?php the_permalink() ?>">Read Full Bio</a> -->
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        <?php else : ?>

            <p>Sorry, no posts exist.</p>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>