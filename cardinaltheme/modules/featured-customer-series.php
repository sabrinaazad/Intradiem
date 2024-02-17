<section class="section section--featured-customer-series full-width" id="<?php echo the_sub_field('id'); ?>" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);">
    
    <div class="section-wrapper">
        
        <?php $heading = get_sub_field('heading');
            if( $heading ): ?>
                <h2 class="heading align--center"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <div class="customer-slider">
            <?php if (have_rows('slider')) : while (have_rows('slider')) : the_row(); ?>
            <div class="slide">
                <div class="image-wrapper"><div class="border-one"></div><img src="<?php echo the_sub_field('image');?>" alt="customer image" /></div>
                <div class="content-wrapper">
                    <?php echo the_sub_field('content');?>
                    <?php $button = get_sub_field('button');
                        if( $button ): 
                        $button_url = $button['url'];
                        $button_title = $button['title'];
                        $button_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                        <div class="button-wrapper">       
                            <a class="btn btn-primary" href="<?php echo $button_url ?>" target="<?php echo $button_target ?>"><?php echo $button_title ?></a>     
                        </div>  
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; else : endif; ?>
        </div>
       
    </div>
</section>