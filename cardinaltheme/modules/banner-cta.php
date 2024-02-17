<section class="section section--banner-cta full-width" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id')?>">
    <div class="border-one"></div>
    <div class="border-two"></div>
    <div class="border-three hide-on-mobile"></div>
    <div class="section-wrapper">
        <?php $heading = get_sub_field('heading');
            if( $heading ): ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
            if( $blurb ): ?>
                <?php echo $blurb; ?>
        <?php endif; ?>

        <?php $button = get_sub_field('button');
            if( $button ): 
            $button_url = $button['url'];
            $button_title = $button['title'];
            $button_target = $button['target'] ? $button['target'] : '_self';
            ?>
        <div class="button-wrapper">       
            <a class="btn btn-white" href="<?php echo $button_url ?>" target="<?php echo $button_target ?>"><?php echo $button_title ?></a>     
        </div>  
        <?php endif; ?>

    </div>
</section>