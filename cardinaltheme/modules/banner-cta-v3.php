<section class="section section--banner-cta-v3 full-width" id="<?php echo the_sub_field('id')?>" style="background-image: url(<?php the_sub_field("background_image"); ?>)">
	<div class="section-wrapper">

        <?php $image = get_sub_field('image');
        if (($image)) : ?>
            <div class="image-wrapper">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
        <?php endif; ?>

        <?php $subheading = get_sub_field('subheading');
            if( $subheading ): ?>
                <div class="subheading"><?php echo $subheading; ?></div>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
            if( $heading ): ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
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
                <a class="btn btn-white" style="background-color: <?php echo the_sub_field('button_bg_color');?>; color: <?php echo the_sub_field('button_color');?>;" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>