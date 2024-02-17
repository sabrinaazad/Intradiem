<section class="section section--blurb" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id')?>">
    <div class="section-wrapper">
        <div class="content-wrapper" style="background-color: <?php echo the_sub_field('background_color'); ?>;">
            <?php $subheading = get_sub_field('subheading');
                if( $subheading ): ?>
                    <h2 class="subheading"><?php echo $subheading; ?></h2>
            <?php endif; ?>

            <?php $heading = get_sub_field('heading');
                if( $heading ): ?>
                    <h2 class="heading"><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
                if( $blurb ): ?>
                    <?php echo $blurb; ?>
            <?php endif; ?>
        </div>
    </div>
</section>