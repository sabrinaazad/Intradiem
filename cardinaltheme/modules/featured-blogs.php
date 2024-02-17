<section class="section section--featured-blogs full-width" id="<?php echo the_sub_field('id')?>">
    <div class="box-one hide-on-mobile"></div>
    <div class="box-two hide-on-mobile"></div>
    <div class="section-wrapper">
        <div class="content">

            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
            <?php endif;

            $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <h4 class="subheading"><?php echo $subheading; ?></h4>
            <?php endif;

            $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <?php echo $blurb; ?>
            <?php endif; ?>
            
        </div>
        <div class="blogs-slider">
            <?php
            $the_query = new WP_Query(array(
                'posts_per_page' => 3,
            ));
            ?>

            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="blog">
                        <?php if( has_post_thumbnail() ) { ?>
                            <div style="background-image: url(<?php the_post_thumbnail_url() ?>)" class="image-wrapper"></div>
                        <?php } else { ?>
                            <div class="image-wrapper"></div>
                        <?php } ?>
                        <div class="content-wrapper" style="background-color: <?php echo get_sub_field('background_color'); ?>;">
                            <h4><?php the_title(); ?></h4>
                            <?php the_excerpt(); ?>
                            <a class="link" href="<?php the_permalink(); ?>">Read More</a>
                            <div class="author">By <?php echo get_the_author() ?> </div>
                            <div class="category"><div class="date"><?php echo get_the_date(); ?> in </div><?php echo the_category(); ?></div>
                            <style>
                                .section--featured-blogs .blogs-slider .blog .content-wrapper::after,
                                .section--featured-blogs .blogs-slider .blog:nth-child(2) .content-wrapper::after {
                                    border-color:  <?php echo get_sub_field('border_color'); ?>;
                                }
                            </style>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php __('No Blogs'); ?></p>
            <?php endif; ?>
        </div>

    </div>
</section>