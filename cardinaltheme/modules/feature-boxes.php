<section class="section section--feature-boxes full-width" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading align--center"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <div class="boxes">
            <?php if (have_rows('boxes')) : while (have_rows('boxes')) : the_row(); ?>
                <div class="box" style="background-color: <? echo the_sub_field('background_color'); ?>">
                    <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                    <h4 class="title"><?php the_sub_field('title'); ?></h4>
                    <p class="blurb"><?php the_sub_field('blurb'); ?></p>
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
            <?php endwhile; else : endif; ?>
        </div>
    </div>
</section>