<section class="section section--hero-banner full-width no-padded-sides" style="background-image: url(<?php the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id')?>">
    <div class="border-one"></div>
    <div class="border-two hide-on-desktop"></div>
    <div class="border-three"></div>
    <div class="border-four"></div>
	<div class="section-wrapper">
        <div class="content-wrapper" style="background-color: <?php the_sub_field('content_bg_color'); ?>;">
            <div class="border"></div>
            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h1 class="heading"><?php echo $heading; ?></h1>
            <?php endif; ?>
            
            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <?php echo $blurb; ?>
            <?php endif; ?>

        </div>
    </div>
</section>