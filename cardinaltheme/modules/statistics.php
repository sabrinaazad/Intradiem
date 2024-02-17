<section class="section section--statistics full-width" style="background-image:url(<?php the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field("id") ?>">
    <div class="border-one"></div>
    <div class="border-two hide-on-mobile"></div>
    <div class="section-wrapper">
        <?php if (get_sub_field("heading")) : ?><h2 class="heading"><?php the_sub_field("heading"); ?></h2><?php endif; ?>
        <?php if (get_sub_field("blurb")) : ?><p class="blurb"><?php the_sub_field("blurb"); ?></p><?php endif; ?>
        <?php $image = get_sub_field('image');
        if (($image)) : ?>
            <div class="image-wrapper">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
        <?php endif; ?>
        <div class="panels">
            <?php if (have_rows('panels')) : $count=0; while (have_rows('panels')) : the_row(); ?>
                <div id="counter<?php echo $count ?>" class="panel">
                <?php if (get_sub_field('number')) : ?><h3 class="number"><span class="hide-on-mobile">$</span><?php the_sub_field('number'); ?><span><?php the_sub_field('symbol'); ?></span></h3><? endif; ?>
                <?php if (get_sub_field('title')) : ?><div class="title"><?php the_sub_field('title'); ?></div><?php endif; ?>
                <?php if (get_sub_field('icon')) : ?><img class="icon" src="<?php the_sub_field('icon'); ?>" alt="icon" /><?php endif; ?>
                </div>
            <?php $count++; endwhile; else : endif; ?>
        </div>
        <?php $button = get_sub_field('button');
            if ($button) :
                $link_url = $button['url'];
                $link_title = $button['title'];
                $link_target = $button['target'] ? $button['target'] : '_self';
            ?>
            <div class="button-wrapper">
                <a class="btn btn-white" href="<?php echo $link_url ?>" target="<?php echo $link_target ?>"><?php echo $link_title ?></a>
            </div>
        <?php endif; ?> 
    </div>
</section>