<?php get_header(); ?>

<main class="main--archive">
    <section class="section section--archive">
    <h1 class="heading align--center">News</h1>
        <div class="post-grid" id="main">
            <?php
            $args = array(
                'post_type' => 'news',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order'   => 'DESC',
                'posts_per_page' => 6,
                'paged' => $paged
            );
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query($args);

            while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                    <div class="blog">
                        <?php if( has_post_thumbnail() ) { ?>
                            <div style="background-image: url(<?php the_post_thumbnail_url() ?>)" class="image-wrapper"></div>
                        <?php } else { ?>
                            <div class="image-wrapper blank"></div>
                        <?php } ?>
                        <div class="content-wrapper">
                            <h4><?php the_title(); ?></h4>
                            <?php the_excerpt(); ?>
                            <a class="link" href="<?php the_permalink(); ?>">Read More</a>
                            
                            <?php $terms = get_the_terms( $post->ID, 'news-types' ); 
                            if ($terms) {
                            foreach($terms as $term) {
                             $category = $term->name;
                            } ?>
                                <div class="category"><div class="date">Published:&nbsp;<?php echo get_the_date(); ?></div>Category:&nbsp;<?php echo $category ?></div>
                            <?php } ?>
                        </div>
                    </div>

            <?php endwhile; ?>

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
    <h2>Categories</h2>
    <?php
		$taxonomy = 'news-types';
		$terms = get_terms($taxonomy); // Get all terms of a taxonomy

		if ( $terms && !is_wp_error( $terms ) ) :
		?>
		
		    <?php foreach ( $terms as $term ) { ?>
		       <a class="link" href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a>
		    <?php } ?>

	<?php endif;?>
   
    
    </section>
</main>

<?php get_footer(); ?>