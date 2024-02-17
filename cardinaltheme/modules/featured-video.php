<section class="section section--featured-video" id="<?php echo the_sub_field('id')?>" style="background-color: <?php the_sub_field('background_color'); ?>;">
    <?php $heading = get_sub_field('heading');
    if( $heading ): ?>
        <h2 class="heading left-aligned"><?php echo $heading; ?></h2>
    <?php endif; ?>    
    <div class="border-one"></div>
    <div class="border-two"></div>
    
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
            <div class="col">
                <?php $video = get_sub_field('video');
                if( ($video) ): ?>
                   <div class="video-wrapper"> 
                        <?php echo $video; ?>
                   </div>
                <?php endif; ?>
            </div>        
            
        <?php endwhile; else :  endif; ?>
        
        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
            <div class="col">
                <div class="section-wrapper">

                    <?php $blurb = get_sub_field('blurb');
                    if( $blurb ): ?>
                        <?php echo $blurb; ?>
                    <?php endif; ?>
                    
                </div>   
            </div>        
        <?php endwhile; else :  endif; ?>
        
    </div>
</section>