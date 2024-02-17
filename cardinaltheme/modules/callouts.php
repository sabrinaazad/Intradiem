<section class="section section--callouts full-width no-padded-sides" id="<?php echo the_sub_field('id') ?>">
    <div class="section-wrapper">
        <div class="two-col">
            <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
                    <div class="col">
                        <div class="border-one"></div>
                        <div class="border-two hide-on-mobile"></div>
                        <div class="content-wrapper">

                            <?php $icon = get_sub_field('icon');
                            if (($icon)) : ?>
                                <div class="image-wrapper">
                                    <img src="<?php echo $icon ?>" alt="icon" />
                                </div>
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

            <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
                    <div class="col">
                        <div class="border-one"></div>
                        <div class="border-two hide-on-mobile"></div>
                        <div class="content-wrapper">

                            <?php $icon = get_sub_field('icon');
                            if (($icon)) : ?>
                                <div class="image-wrapper">
                                    <img src="<?php echo $icon ?>" alt="icon" />
                                </div>
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