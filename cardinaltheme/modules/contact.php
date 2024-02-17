<section class="section section--contact full-width no-padded-sides" style="background-image: url(<?php the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id') ?>">
    <div class="box-two"></div>
    <div class="section-wrapper">
        <div class="two-col">
            <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
                    <div class="col">
                        <?php $image = get_sub_field('image');
                        if (($image)) : ?>
                            <div class="box-one"></div>
                            <div class="border-one"></div>
                            <div class="image-wrapper">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                    </div>
            <?php endwhile;
            else :  endif; ?>

            <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
                    <div class="col">
                        <div class="content-wrapper">

                            <?php $heading = get_sub_field('heading');
                            if ($heading) : ?>
                                <h2 class="heading left-aligned"><?php echo $heading; ?></h2>
                            <?php endif; ?>

                            <?php $form = get_sub_field('form');
                            if ($form) : ?>
                                <?php echo $form; ?>
                            <?php endif; ?>

                        </div>
                    </div>
            <?php endwhile;
            else :  endif; ?>

        </div>
    </div>
</section>