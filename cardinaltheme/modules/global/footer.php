<footer class="footer full-width" id="footer">
    <section class="section section--footer">
        <div class="col">
            <div class="logo-container">
                <a href="/"><img src="<?php echo the_field('footer_logo', 'options'); ?>" alt="Logo" class="logo"></a>
            </div>
            <div class="details-container">
                <p><?php echo the_field('footer_details_block', 'options'); ?></p>
            </div>
            <?php if( have_rows('social_icons', 'options') ): ?>
            <h3>Follow Us:</h3>
            <div class="icons-container">
                <?php while( have_rows('social_icons', 'options') ) : the_row();
                    $link = get_sub_field('link');
                    $icon = get_sub_field('icon');
                    $alt = get_sub_field('alt'); ?>
                    <a class="icon" target="_blank" href="<?php echo $link ?>">
                        <img src="<?php echo $icon?>" alt="<?php echo $alt?>" />
                    </a>
                <?php endwhile; ?>
            </div>
            <?php else : endif;?>
            <?php if( have_rows('review_icons', 'options') ): ?>
                <h3>Certified Secure:</h3>
                <div class="icons-container">
                    <?php while( have_rows('review_icons', 'options') ) : the_row();
                        $link = get_sub_field('link');
                        $icon = get_sub_field('icon');
                        $alt = get_sub_field('alt'); ?>
                        <a class="icon_v2" target="_blank" href="<?php echo $link ?>">
                            <img src="<?php echo $icon?>" alt="<?php echo $alt?>" />
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php else : endif;?>
        </div>
        <div class="col">
            <h3>Menu</h3>
            <div class="menu-container">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-nav',
                    'container' => '',
                    'items_wrap' => '
                        <ul class="footer-nav">
                            %3$s
                        </ul>
                        ',
                    'menu_id' => 'footerNav'
                )); ?>
            </div>
        </div>
        <div class="col">
            <div class="info-container">
                <?php echo the_field('footer_info_block', 'options'); ?>
            </div>
        </div>
        <div class="bottom-container">
            <p><?php echo the_field('footer_bottom_block', 'options'); ?>
                <!-- <br>Website Design, Development & SEO by <a target="_blank" href="https://www.cardinaldigitalmarketing.com/">Cardinal Digital Marketing</a> -->
            </p>
        </div>
    </section>
</footer>