<section class="section section--three-panels full-width" style="background-image:url(<?php echo the_sub_field('background_image'); ?>;" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading align--center"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <div class="panels">
            
            <?php if (have_rows('panels')) : while (have_rows('panels')) : the_row(); ?>
                
                <?php if (get_sub_field('link')) : ?>
                    <a class="panel" href="<?php echo the_sub_field('link'); ?>">
                    <?php   
                    $icon = get_sub_field('icon');
                    $image = get_sub_field('image');
                    ?>
                    <?php 
                        if( get_sub_field('image_or_icon') == 'Icon' ) { ?>
                        <img src="<?php the_sub_field('icon'); ?>" class="icon" alt="icon" />
                    <?php 
                        } elseif (get_sub_field('image_or_icon') == 'Image' ) { ?>
                            <div class="image-wrapper">
                                <img src="<?php the_sub_field('image'); ?>" class="image" alt="icon" />
                            </div>
                    <?php } ?>
                        <h4 class="title"><?php the_sub_field('title'); ?></h4>
                        <p class="blurb"><?php the_sub_field('blurb'); ?></p>
                    </a>
                <?php else : ?>
                    <div class="panel">
                    <?php   
                    $icon = get_sub_field('icon');
                    $image = get_sub_field('image');
                    ?>
                    <?php 
                        if( get_sub_field('image_or_icon') == 'Icon' ) { ?>
                        <img src="<?php the_sub_field('icon'); ?>" class="icon" alt="icon" />
                    <?php 
                        } elseif (get_sub_field('image_or_icon') == 'Image' ) { ?>
                            <div class="image-wrapper">
                                <img src="<?php the_sub_field('image'); ?>" class="image" alt="icon" />
                            </div>
                    <?php } ?>
                        <h4 class="title"><?php the_sub_field('title'); ?></h4>
                        <p class="blurb"><?php the_sub_field('blurb'); ?></p>
                    </div>
                <?php endif; ?>   
            <?php endwhile; else : endif; ?>
        </div>
    </div>
</section>