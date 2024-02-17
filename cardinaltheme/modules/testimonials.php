<section class="section section--testimonials full-width" id="<?php echo the_sub_field('id')?>">
	<div class="section-wrapper">
        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
        if ($blurb) : ?>
            <?php echo $blurb; ?>
        <?php endif; ?>
    </div>
    <div class="box-one hide-on-mobile"></div>
    <div class="box-two hide-on-mobile"></div>
        <? if (have_rows('slider')) : ?>
        <div class="testimonials-slider">
            <? while (have_rows('slider')) : the_row(); ?>
                <div class="slide">
                    <div class="box-one hide-on-desktop"></div>
                    <div class="box-two hide-on-desktop"></div>
                    <? if (get_sub_field('featured_image')) : ?><div class="featured-image hide-on-desktop" style="background-image: url(<? the_sub_field('featured_image'); ?>);"></div><div class="featured-image hide-on-mobile"><img src="<? the_sub_field('featured_image'); ?>" alt="featured image" /></div><? endif; ?>
                    <? if (get_sub_field('testimonial')) : ?><div class="blurb"><? the_sub_field('testimonial'); ?></div><? endif; ?>
                </div>
            <? endwhile; ?>
        </div>
        <? else : endif; ?>
    <div class="section-wrapper">
        <?php $button = get_sub_field('button');
        if ($button) :
            $button_url = $button['url'];
            $button_title = $button['title'];
            $button_target = $button['target'] ? $button['target'] : '_self';
        ?>
            <div class="button-wrapper">
                <a class="btn btn-secondary" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>