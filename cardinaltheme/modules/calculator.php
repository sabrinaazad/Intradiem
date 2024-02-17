<section class="section section--calculator full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id') ?>">
    
    <div class="section-wrapper">
    <div class="box-one hide-on-mobile"></div>
    <div class="box-two hide-on-mobile"></div>
        <div class="two-col">
            <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
                <div class="col">
                    <?php $subheading = get_sub_field('subheading');
                    if ($subheading) : ?>
                        <div class="subheading"><?php echo $subheading; ?></div>
                    <?php endif; ?>
                    <?php $heading = get_sub_field('heading');
                    if ($heading) : ?>
                        <h2 class="heading"><?php echo $heading; ?></h2>
                    <?php endif; ?>
                    <?php the_sub_field('calculator'); ?>
                </div>
            <?php endwhile;
            else :  endif; ?>

            <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
                <div class="col">
                    <div class="content-wrapper">

                        <?php $blurb = get_sub_field('blurb');
                        if ($blurb) : ?>
                            <?php echo $blurb; ?>
                        <?php endif; ?>
                        <style>
                            .section--calculator .two-col .col:nth-child(2)::before {
                                background-color:  <?php echo get_sub_field('background_color'); ?>;
                            }
                        </style>
                    </div>
                </div>
            <?php endwhile;
            else :  endif; ?>

        </div>
    </div>
   
</section>