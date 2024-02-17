<?php
if (get_sub_field('reverse')) {
    $reverse = "reverse";
} else {
    $reverse = "";
}
?>
<section class="section section--side-by-side-v2 no-padded-sides no-padded-top no-padded-bottom <?php echo $reverse; ?>" id="<?php echo the_sub_field('id') ?>">
    <div class="box"></div>
    <div class="border"></div>
    <div class="section-wrapper">
        <div class="two-col">
            <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
                    <div class="col">
                        <div class="content-wrapper" style="background-color: <?php echo get_sub_field('background_color'); ?>;">

                            <?php $icon = get_sub_field('icon');
                            if (($icon)) : ?>
                                <div class="icon-wrapper">
                                    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                                </div>
                            <?php endif; ?>

                            <?php $heading = get_sub_field('heading');
                            if ($heading) : ?>
                                <h2 class="heading left-aligned"><?php echo $heading; ?></h2>
                            <?php endif; ?>

                            <?php $blurb = get_sub_field('blurb');
                            if ($blurb) : ?>
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
                    </div>
            <?php endwhile;
            else :  endif; ?>

            <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
                    <div class="col">
                        <?php $image = get_sub_field('image');
                        if (($image)) : ?>
                            <div class="image-wrapper">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                    </div>
            <?php endwhile;
            else :  endif; ?>

        </div>
    </div>
</section>