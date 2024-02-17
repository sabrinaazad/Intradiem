<section class="section section--side-by-side-v4 full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id') ?>">
    <div class="section-wrapper">
        <div class="two-col">
            <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
                    <div class="col">
                        <?php $image = get_sub_field('featured_image');
                        if (($image)) : ?>
                            <div class="image-wrapper">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                    </div>
            <?php endwhile;
            else :  endif; ?>

            <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
                    <div class="col">
                        <div class="border hide-on-mobile"></div>
                        <div class="content-wrapper">

                            <?php $subheading = get_sub_field('subheading');
                            if ($subheading) : ?>
                                <div class="subheading left-aligned"><?php echo $subheading; ?></div>
                            <?php endif; ?>

                            <?php $heading = get_sub_field('heading');
                            if ($heading) : ?>
                                <h2 class="heading left-aligned"><?php echo $heading; ?></h2>
                            <?php endif; ?>

                            <?php $blurb = get_sub_field('blurb');
                            if ($blurb) : ?>
                                <?php echo $blurb; ?>
                            <?php endif; ?>

                        </div>
                    </div>
            <?php endwhile;
            else :  endif; ?>

        </div>
    </div>
</section>