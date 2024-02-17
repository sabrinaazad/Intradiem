<section class="section section--three-panels-v2 full-width" style="background-image:url(<?php echo the_sub_field('background_image'); ?>;" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        
        <?php $subheading = get_sub_field('subheading');
        if ($subheading) : ?>
            <div class="subheading align--center"><?php echo $subheading; ?></div>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading align--center"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
        if ($blurb) : ?>
            <?php echo $blurb; ?>
        <?php endif; ?>

        <div class="panels panels-slider">
            
            <?php if (have_rows('panels')) : while (have_rows('panels')) : the_row(); ?>
                <?php if (get_sub_field('link')) : ?>
                    <a class="panel" href="<?php echo the_sub_field('link'); ?>">
                        <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                        <h4 class="title"><?php the_sub_field('title'); ?></h4>
                        <p class="blurb"><?php the_sub_field('blurb'); ?></p>
                    </a>
                <?php else : ?>
                    <div class="panel">
                        <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                        <h4 class="title"><?php the_sub_field('title'); ?></h4>
                        <p class="blurb"><?php the_sub_field('blurb'); ?></p>
                    </div>
                <?php endif; ?>   
            <?php endwhile; else : endif; ?>
        </div>
    </div>
</section>