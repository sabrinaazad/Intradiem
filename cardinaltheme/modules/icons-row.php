<section class="section section--icons-panel full-width"

<?php 
    if( get_sub_field('background_image_or_color') == 'Background Image' ) { ?>
        style="background-image:url(<?php echo the_sub_field('background_image'); ?>;"
<?php 
    } elseif (get_sub_field('background_image_or_color') == 'Background Color' ) { ?>
        style="background-color:<?php echo the_sub_field('background_color'); ?>;"
<?php } ?> 

id="<?php echo the_sub_field('id'); ?>">

    <div class="section-wrapper">
       
            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading align--center"><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb"><?php echo $blurb; ?></div>
            <?php endif; ?>


      
        <?php if (have_rows('icons_row')) : ?>

            <div class="icons-row">

                <?php while (have_rows('icons_row')) : the_row(); ?>
                    <?php $icon = get_sub_field('icon');
                    $heading = get_sub_field('heading'); ?>

                    <div class="row">
                        <div class="icon">
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                        </div>
                        <h4><? echo $heading ?></h4>
                    </div>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>

    </div>
</section>