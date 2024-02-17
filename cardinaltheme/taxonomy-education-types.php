<?php get_header(); 

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

?>

<main class="main--archive">
    <section class="section section--archive">
    <h1 class="heading align--center">Education Category: <?php echo  $term->name ; ?></h1>
        <div class="post-grid" id="main">
		<?php query_posts($query_string . '&orderby=date&order=ASC');?>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
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
                        <div class="author">By&nbsp;<?php echo get_the_author() ?> </div>
                        
                        <?php $terms = get_the_terms( $post->ID, 'education-types' ); 
                        if ($terms) {
                        foreach($terms as $term) {
                         $category = $term->name;
                        } ?>
                            <div class="category"><div class="date">Published:&nbsp;<?php echo get_the_date(); ?></div>Category:&nbsp;<?php echo $category ?></div>
                        <?php } ?>
                    </div>
                </div>
			<?php endwhile; endif; ?>
		  

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