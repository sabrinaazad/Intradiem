<section class="section section--side-by-side-four-squares-v2 full-width" id="<?php echo the_sub_field('id') ?>">
        <div class="border-two hide-on-mobile"></div>
        <?php if (have_rows('two_columns')) : while (have_rows('two_columns')) : the_row(); 
            if (get_sub_field('reverse')) {
                $reverse = 'reverse';
            } else {
                $reverse = "";
            } ?>
            <div class="two-col <?php echo $reverse ?>">
                <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
                    <div class="col">
                        <?php $image = get_sub_field('image');
                        if (($image)) : ?>
                            <div class="image-wrapper">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; else :  endif; ?>

                <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
                    <div class="col" style="background-color: <?php the_sub_field('background_color_1'); ?>">
                        <div class="content-wrapper">
                            <div class="border-one"></div>
                            <div class="border-two"></div>
                            <?php $subheading = get_sub_field('subheading');
                            if ($subheading) : ?>
                                <div class="subheading left-aligned"><?php echo $subheading; ?></div>
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
                            if ($button) :
                                $button_url = $button['url'];
                                $button_title = $button['title'];
                                $button_target = $button['target'] ? $button['target'] : '_self';
                            ?>
                                <div class="button-wrapper">
                                    <a class="btn btn-white" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; else :  endif; ?>
            </div>
        <?php endwhile; else :  endif; ?>

</section>