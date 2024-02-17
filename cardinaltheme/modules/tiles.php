<section class="section section--tiles full-width" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="content">

        <?php $subheading = get_sub_field('subheading');
        if ($subheading) : ?>
            <div class="subheading"><?php echo $subheading; ?></div>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
        if ($blurb) : ?>
            <?php echo $blurb; ?>
        <?php endif; ?>

        </div>
        <div class="tiles tiles-slider">
            
            <?php if (have_rows('tiles')) : while (have_rows('tiles')) : the_row(); ?>
                <?php if (get_sub_field('link')) : ?>
                    <a class="tile" href="<?php echo the_sub_field('link'); ?>">
                        <div class="image-wrapper" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>
                        <h4 style="background-color: <?php the_sub_field('background_color'); ?>;"><?php the_sub_field('title'); ?></h4>
                        <p"><?php the_sub_field('blurb'); ?></p>
                    </a>
                <?php else : ?>
                    <div class="tile">
                        <div class="image-wrapper" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>
                        <h4 style="background-color: <?php the_sub_field('background_color'); ?>;"><?php the_sub_field('title'); ?></h4>
                        <p"><?php the_sub_field('blurb'); ?></p>
                    </div>
                <?php endif; ?>   
            <?php endwhile; else : endif; ?>
        </div>
    </div>
</section>