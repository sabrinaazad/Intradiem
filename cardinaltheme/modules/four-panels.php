<section class="section section--four-panels full-width" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">

        <div class="content">

        <?php $heading = get_sub_field('heading');
        if( $heading ): ?>
            <h2 class="heading"><?php echo $heading; ?></h2>
        <?php endif; ?>

        </div>
        <div class="panels four-panels">
            <?php if (have_rows('panels')) : while (have_rows('panels')) : the_row(); ?>
                    <div class="panel">
                        <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                        <h4><?php the_sub_field('title'); ?></h4>
                        <p"><?php the_sub_field('blurb'); ?></p>
                        <?php $button = get_sub_field('button');
                        if ($button) :
                            $link_url = $button['url'];
                            $link_title = $button['title'];
                            $link_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                        <div class="button-wrapper">
                            <a class="btn btn-primary" href="<?php echo $link_url ?>" target="<?php echo $link_target ?>"><?php echo $link_title ?></a>
                        </div>
                        <?php endif; ?> 
                    </div>
            <?php endwhile;
            else :  endif; ?>
        </div>
    </div>
</section>