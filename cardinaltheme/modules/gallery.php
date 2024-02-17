<section class="section section--gallery full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id') ?>">
    <div class="section-wrapper">
        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <div class="heading"><?php echo $heading; ?></div>
        <?php endif; ?>

        <div class="gallery-wrapper">
            <?php if (have_rows('gallery')) : while (have_rows('gallery')) : the_row(); ?>
                    
                        <?php $image = get_sub_field('image');
                        if (($image)) : ?>
                            <div class="box"></div>
                            <div class="image-wrapper">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        <?php endif; ?>
               
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>