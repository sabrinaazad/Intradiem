<section class="section section--logo-slider full-width" style="background-color: <?php echo the_sub_field('background_color'); ?>;" id="<?php echo the_sub_field('id'); ?>">
<h2 class="heading align--center" style="color: <?php echo the_sub_field('heading_color'); ?>;"><?php echo the_sub_field('heading'); ?></h2>
<?php if( have_rows('slider') ): ?>
    <div class="logo_slider">
        <?php while( have_rows('slider') ) : the_row(); ?> 
    
            <?php $image = get_sub_field('image'); ?>
            <div class="slide"><img src="<?php echo $image ?>" alt="slide logo" /></div>

        <?php  endwhile; ?>
    </div>
<?php else : endif; ?>
</section>