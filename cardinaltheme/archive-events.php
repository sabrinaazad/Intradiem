<?php get_header();
/* Template Name: Events Archive */
?>
<?php $args = array(
    'p' => 320,
    'post_type' => 'any'
);
$page_fields = new WP_Query($args);
if ($page_fields->have_posts()) : while ($page_fields->have_posts()) : $page_fields->the_post(); ?>
<?php if (have_rows('modules')) : while (have_rows('modules')) : the_row();
                // Case: hero-banner layout.
                if (get_row_layout() == 'hero_banner') :
                    get_template_part('modules/hero-banner');
                endif;

                // Case: side-by-side-list-image layout.
                if (get_row_layout() == 'side_by_side_list_image') :
                    get_template_part('modules/side-by-side-list-image');
                endif;   

            endwhile;
        else :

        endif;
    endwhile;
endif; ?>

<?php wp_reset_postdata(); ?>

<main class="main--archive-custom events">
    <section class="section section--archive">
        <h2 class="heading black align--center">Upcoming Events</h2>
        <div class="post-grid events-slider">

            <? $currentdate = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") - 1, date("Y")));

            if (get_query_var('paged')) {
                $paged = get_query_var('paged');
            } else if (get_query_var('page')) {
                $paged = get_query_var('page');
            } else {
                $paged = 1;
            }
            query_posts(array(
                'meta_query' => array(
                    array(
                        'key' => 'end_date',
                        'compare' => '>',
                        'value' => $currentdate,
                        'type' => 'DATE',
                    )
                ),
                'post_type' => 'events',
                'meta_key' => 'end_date',
                'orderby' => 'meta_value_num',
                'posts_per_page' => 5,
                'order' => 'ASC',
                'paged' => $paged
            ));
            while (have_posts()) : the_post();

            ?>
                <a class="blog" href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) { ?>
                        <div style="background-image: url(<?php the_post_thumbnail_url() ?>)" class="image-wrapper"></div>
                    <?php } else { ?>
                        <div class="image-wrapper"></div>
                    <?php } ?>
                    <div class="content-wrapper">
                        <div class="info">
                            <h4><?php the_title(); ?></h4>
                            <div class="location"> <?php echo the_field('location'); ?></div>
                        </div>
                        <div class="date"><b><?php echo the_field('start_date'); ?></b></div>
                    </div>
                </a>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <h2 class="heading black align--center">Past Events</h2>
        <div class="post-grid events-slider-past">

            <? $pastdate = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") - 1, date("Y")));

            if (get_query_var('paged')) {
                $paged = get_query_var('paged');
            } else if (get_query_var('page')) {
                $paged = get_query_var('page');
            } else {
                $paged = 1;
            }
            query_posts(array(
                'meta_query' => array(
                    array(
                        'key' => 'end_date',
                        'compare' => '<=',
                        'value' => $pastdate,
                        'type' => 'DATE',
                    )
                ),
                'post_type' => 'events',
                'meta_key' => 'end_date',
                'orderby' => 'meta_value_num',
                'posts_per_page' => 5,
                'order' => 'ASC',
                'paged' => $paged
            ));
            while (have_posts()) : the_post();

            ?>
                <a class="blog" href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) { ?>
                        <div style="background-image: url(<?php the_post_thumbnail_url() ?>)" class="image-wrapper"></div>
                    <?php } else { ?>
                        <div class="image-wrapper"></div>
                    <?php } ?>
                    <div class="content-wrapper">
                        <div class="info">
                            <h4><?php the_title(); ?></h4>
                            <div class="location"> <?php echo the_field('location'); ?></div>
                        </div>
                        <div class="date"><b><?php echo the_field('start_date'); ?></b></div>
                    </div>
                </a>

            <?php endwhile; ?>
        </div>
    </section>
</main>


<?php $args = array(
    'p' => 320,
    'post_type' => 'any'
);
$page_fields = new WP_Query($args);
if ($page_fields->have_posts()) : while ($page_fields->have_posts()) : $page_fields->the_post(); ?>
<?php if (have_rows('modules')) : while (have_rows('modules')) : the_row();
                // Case: banner-cta layout.
                if (get_row_layout() == 'banner_cta') :
                    get_template_part('modules/banner-cta');
                endif;

            endwhile;
        else :

        endif;
    endwhile;
endif; ?>

<?php wp_reset_postdata(); ?>


<?php get_footer(); ?>