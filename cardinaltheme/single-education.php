<?php get_header(); ?>

<main class="main--single">
    <section class="section section--single">
        <a class="btn-back" href="/resources/library/">« Back to Library</a>
        <div class="single">
        <h1 class="heading align--center"><?php the_title(); ?></h1>
            <?php while (have_posts()) : the_post(); ?>

                <div class="content">
                    <!-- <?php the_post_thumbnail(); ?> -->
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
    <h2>Categories</h2>
    <?php
		$taxonomy = 'education-types';
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
