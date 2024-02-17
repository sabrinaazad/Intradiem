<?php get_header();
/* Template Name: Customer Success Archive */
?>
<?php $args = array(
    'p' => 318,
    'post_type' => 'any'
);
$page_fields = new WP_Query($args);
if ($page_fields->have_posts()) : while ($page_fields->have_posts()) : $page_fields->the_post(); ?>
<?php if (have_rows('modules')) : while (have_rows('modules')) : the_row();
                // Case: hero-banner layout.
                if (get_row_layout() == 'hero_banner') :
                    get_template_part('modules/hero-banner');
                endif;

                // Case: featured-customer-series layout.
                if (get_row_layout() == 'featured_customer_series') :
                    get_template_part('modules/featured-customer-series');
                endif;    

            endwhile;
        else :

        endif;
    endwhile;
endif; ?>

<?php wp_reset_postdata(); ?>


<main class="main--archive-custom success-stories">
    <section class="section section--archive">
        <h2 class="heading black align--center">Read More Customer Success Stories</h2>
        <div class="post-grid events-slider">

            <? query_posts(array(
                'post_type' => 'success-stories',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'paged' => $paged
            ));
            while (have_posts()) : the_post(); ?>

                <a class="blog" href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) { ?>
                        <div class="image-wrapper"><img src="<?php the_post_thumbnail_url() ?>" alt="feature image" /></div>
                    <?php } else { ?>
                        <div class="image-wrapper"><img src="/wp-content/themes/cardinaltheme/assets/blog-placeholder.jpg" alt="placeholder" /></div>
                    <?php } ?>
                    <div class="topic"><?php echo the_field('topic'); ?></div>
                    <h4><?php the_title(); ?></h4>
                </a>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>