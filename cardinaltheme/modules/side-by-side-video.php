<section class="section section--side-by-side-video" id="<?php echo the_sub_field('id')?>">
    <div class="box-one" style="background-color: <?php echo the_sub_field('box_left_bg_color'); ?>"></div>
    <div class="box-two" style="background-color: <?php echo the_sub_field('box_right_bg_color'); ?>"></div>
    <div class="border-one"></div>
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
            <div class="col">
                <div class="section-wrapper" style="background-color: <?php echo get_sub_field('background_color'); ?>">

                    <?php $heading = get_sub_field('heading');
                    if( $heading ): ?>
                        <h2 class="heading left-aligned"><?php echo $heading; ?></h2>
                    <?php endif; ?>

                    <?php $blurb = get_sub_field('blurb');
                    if( $blurb ): ?>
                        <?php echo $blurb; ?>
                    <?php endif; ?>
                    
                    <?php $button = get_sub_field('button');
                    if ($button) :
                        $button_url = $button['url'];
                        $button_title = $button['title'];
                        $button_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <div class="button-wrapper">
                        <a class="btn btn-primary" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                    </div>
                    <?php endif; ?>
                </div>   
            </div>  
        <?php endwhile; else :  endif; ?>
        
        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
            <div class="col">
                <?php $video = get_sub_field('video');
                if( ($video) ): ?>
                   <div class="video"> 
                        <?php echo $video; ?>
                   </div>
                <?php endif; ?>
            </div>                 
        <?php endwhile; else :  endif; ?>
        
    </div>
</section>