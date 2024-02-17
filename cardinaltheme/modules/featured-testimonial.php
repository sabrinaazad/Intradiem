<section class="section section--featured-testimonial no-padded-sides" id="<?php echo the_sub_field('id')?>">
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
            <div class="col">
                <div class="border-one hide-on-mobile"></div>
                <div class="section-wrapper" style="background-color: <?php the_sub_field('background_color')?>">
                    <?php $blurb = get_sub_field('blurb');
                    if( $blurb ): ?>
                        <?php echo $blurb; ?>
                    <?php endif; ?>     
                </div>   
            </div>         
        <?php endwhile; else :  endif; ?>
        
        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
            <div class="col">
                <div class="border-two hide-on-mobile"></div>
                <?php $image = get_sub_field('image');
                if (($image)) : ?>
                    <div class="image-wrapper" style="background-image: url(<?php echo esc_url($image['url']); ?>);">
                        <!-- <img src="" alt="<?php echo esc_attr($image['alt']); ?>" /> -->
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; else :  endif; ?>
        
    </div>
</section>